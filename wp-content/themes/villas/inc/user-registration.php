<?php
function registration_validation( $username, $password, $email )  {
    $reg_errors = new WP_Error;
	$error_msg = false;

    if ( strlen( $username ) < 4 ) {
        $reg_errors->add('username_length', 'Username is too short. At least 4 characters are required.');
    }

    if ( username_exists( $username ) )
        $reg_errors->add('user_name', 'Sorry, this username already exists!');

    if ( !validate_username( $username ) ) {
        $reg_errors->add('username_invalid', 'Sorry, the username you entered is not allowed!');
    }

    if ( strlen( $password ) < 5 ) {
        $reg_errors->add('password', 'The password must be longer than 5 characters!');
    }
	
	/*if ( $password !=  $password2 ) {
        $reg_errors->add('password', 'Passwords do not match');
    }*/

    if ( !is_email( $email ) ) {
        $reg_errors->add('email_invalid', 'Email is not valid!');
    }

    if ( email_exists( $email ) ) {
        $reg_errors->add('email', 'This email address is already in use.');
    }
    
    if ( is_wp_error( $reg_errors ) ) {
		$error_msg = '';
        foreach ( $reg_errors->get_error_messages() as $error ) {
            $error_msg .= '<p>'.$error.'</p>';
        }
    }
	return $error_msg;
}

function auth_user_login($user_login, $password, $login) {
	$info = array();
    $info['user_login'] = $user_login;
    $info['user_password'] = $password;
    $info['remember'] = true;
	
	$reg_errors = new WP_Error;
	$error_msg = false;
	
	$user_signon = wp_signon( $info, '' ); // From false to '' since v4.9
    if ( is_wp_error($user_signon) ){
		$reg_errors->add('logged_in', 'Incorrect login or password!');
    } else {
		wp_set_current_user($user_signon->ID); 
		wp_set_auth_cookie($user_signon->ID);
    }
	
	if ( is_wp_error( $reg_errors ) ) {
		$error_msg = '';
        foreach ( $reg_errors->get_error_messages() as $error ) {
            $error_msg .= '<p>'.$error.'</p>';
        }
    }
	return $error_msg;
}




/*User register*/
function user_register() {
	
	// First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-register-nonce', 'register_security' );
	
	$username	= 	sanitize_user($_POST['user_login']);
	$password 	= 	esc_attr($_POST['user_password']);
	//$password2 	= 	esc_attr($_POST['user_password2']);
	$email 		= 	sanitize_email($_POST['user_email']);
		
	$errors = registration_validation( $username, $password, $email);	
	
	$data = [];
	$data['error'] = 0;
	
	if(!$errors) {		
		$userdata = array(
			'user_login'	=> 	$username,
			'user_email' 	=> 	$email,
			'user_pass' 	=> 	$password
		);
		
       $user_id = wp_insert_user( $userdata );
       //$user_id = 1111;
		if( $user_id ) {

			wp_set_current_user($user_id);
			wp_set_auth_cookie($user_id);
			
			$user = new WP_User($user_id);
			$user->set_role('subscriber');
			
			//update_user_meta($user_id, 'company', $_POST['company']);
			//update_user_meta($user_id, 'post', $_POST['position']);
			//update_user_meta($user_id, 'telefon', $_POST['phone']);

			$AllInOne = '<div style="font-size:14px;">';
			$AllInOne .= $username.', we are happy to welcome you to the Insider Villas website!<br/>';
			$AllInOne .= '<b>Your login:</b> '.$username.'<br/>';
			$AllInOne .= '<b>Your e-mail:</b> '.$email.'<br/>';
			$AllInOne .= '<b>Your password:</b> '.$password.'<br/>';
			$AllInOne .= '</div>';							
			$admin_email = get_field('email', 'options');
			$headers="From: Webmaster \nReply-to:".$admin_email."\nContent-Type: text/html; charset=\"utf-8\"\n";

			mail($email, 'Congratulations on registering for the site Insider Villas', $AllInOne, $headers);			

			$data['msg'] = 'You are successfully registered.<br/> ';
 
		}	
		else { $data['error'] = 1; $data['msg'] = 'An error has occurred. Please contact the site administration.'; } 
	}
	else {
		$data['error'] = 1;
		$data['msg'] = $errors;
	};
	
	echo json_encode($data);
	
	wp_die(); 
}
add_action('wp_ajax_user_register', 'user_register'); 
add_action('wp_ajax_nopriv_user_register', 'user_register');


/*User Login*/
function user_login() {
	
	// First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-login-nonce', 'login_security' );
	
	$nickname	= 	sanitize_user($_POST['user_login']);
	$password 	= 	esc_attr($_POST['pwd']);
		
 	$login_result = auth_user_login($nickname, $password, 'Login');
	
	if(strlen($login_result) == 0)	{
		$data['error'] = 0;
		$data['msg'] = 'You are successfully registered.';
	}
	else {
		$data['error'] = 1;
		$data['msg'] = $login_result;
	}
	echo json_encode($data);
	
	wp_die(); 
}
add_action('wp_ajax_user_login', 'user_login'); 
add_action('wp_ajax_nopriv_user_login', 'user_login');