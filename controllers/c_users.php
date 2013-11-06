<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
       
    } 

    public function index() {
        echo "This is the index page";
    }

    public function signup() {
        # Set up the view
        $this->template->content = View::instance('v_users_signup');
        $this->template->title = "Sign Up";
        
        #Render the view
        echo $this->template;

    }

    #MAKE SURE PEOPLE SIGNING UP CAN'T INPUT THE SAME EMAIL ADDRESSSSS

    public function p_signup() {

        # More data we want stored with the user
        $_POST['created'] = Time::now();
        $_POST['modified'] = Time::now();

        # Encrypt the password
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

        # Create an encrypted token via their email address and a random string
        $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());

        # Insert this user into the database
        $user_id = DB::instance(DB_NAME)->insert_row('users', $_POST);

        # Send them to the edit profile page, once signed up
        Router::redirect("/users/editprofile");
    }

    public function login($error=NULL) {
        
        $this->template->content = View::instance('v_users_login');

        $this->template->content->error = $error;

        echo $this->template;
    }

    public function p_login() {

        # Sanitize the user entered data to prevent any funny-business (re: SQL Injection Attacks)
        $_POST = DB::instance(DB_NAME)->sanitize($_POST);

        # Hash submitted password so we can compare it against one in the db
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

        # Search the db for this email and password
        # Retrieve the token if it's available
        $q = "SELECT token 
            FROM users 
            WHERE email = '".$_POST['email']."' 
            AND password = '".$_POST['password']."'";

        $token = DB::instance(DB_NAME)->select_field($q);

        # If we didn't find a matching token in the database, it means login failed
        if(!$token) {

            # Send them back to the login page
            Router::redirect("/index/index/error");

        # Login succeeded! 
        } 

        else {

        /* 
        Store this token in a cookie using setcookie()
        Important Note: *Nothing* else can echo to the page before setcookie is called
        Not even one single white space.
        param 1 = name of the cookie
        param 2 = the value of the cookie
        param 3 = when to expire
        param 4 = the path of the cooke (a single forward slash sets it for the entire domain)
        */
        setcookie("token", $token, strtotime('+2 weeks'), '/');

        # Send them to the main page - or whever you want them to go
        Router::redirect("/");

    }

}
    

    public function logout() {
         # Generate and save a new token for next login
        $new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

        # Create the data array we'll use with the update method
        # In this case, we're only updating one field, so our array only has one entry
        $data = Array("token" => $new_token);

        # Do the update
        DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$this->user->token."'");

        # Delete their token cookie by setting it to a date in the past - effectively logging them out
        setcookie("token", "", strtotime('-1 year'), '/');

        # Send them back to the main index.
        Router::redirect("/");


    }

    public function editprofile() {

        # Make sure user is logged in if they want to use anything
        if(!$this->user) {
            die("You have to be a member to edit your profile. Please <a href='/'>login</a> or <a href='/users/signup'>sign up</a>.");
        
        }

        else {
        $view = View::instance('v_users_editprofile');

        $view->user_name = $user_name;


        echo $view;
    }

     
    }

    public function profile($first_name = NULL) {

        $view = View::instance('v_users_profile');

        $view->first_name = $first_name;

        echo $view;

        if($first_name == NULL) {
            echo "No user specified";
        }
        else {
            echo "This is the profile for ".$first_name;
        }
    }

} # end of the class