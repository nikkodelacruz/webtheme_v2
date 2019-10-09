<?php 
/**
 * Gravity forms hooks
 */


/* Gravity forms validation (validate fields) */
add_filter( 'gform_validation', 'gform_custom_validation' );
function gform_custom_validation( $validation_result ) {

    $form = $validation_result['form'];

    /* VALIDATE USER LOGIN */
    // if($form['id'] == 1){

    //     $id_arr = array();
    //     $msg_arr = array();

    //     if(rgpost( 'input_1' ) && rgpost( 'input_2' )){
	   //      $user = wp_authenticate( rgpost( 'input_1' ), rgpost( 'input_2' ) );
	   //      if(is_wp_error($user)){
	   //          $id_arr[] = 1;
	   //          $id_arr[] = 2;
	   //          $msg_arr[1] = "Invalid Username";
	   //          $msg_arr[2] = "Invalid Password";
	   //      }

	   //      // PROCESS VALIDATIONS
	   //      if($id_arr){
	   //          $validation_result['is_valid'] = false;
	   //           foreach( $form['fields'] as &$field ) {
	   //              if ( in_array($field->id, $id_arr) ) {
	   //                  $field->failed_validation = true;
	   //                  $field->validation_message = $msg_arr[$field->id];
	   //              }
	   //          }
	   //      }
    //     }

    // }

    // /* VALIDATE FIELDS */
    // elseif($form['id'] == 2){

    // 	$id_arr = array();
    //     $msg_arr = array();

    //     /* VALIDATE EMAIL ADDRESS */
    //     // -check if email already taken
    //     if ( email_exists( rgpost( 'input_1' ) ) ) {
    //         $id_arr[] = 1;
    //         $msg_arr[1] = "Email already taken";
    //     }
    //     // -check if email contains special characters
    //     if ( rgpost( 'input_1' ) && !preg_match("#^[A-Za-z0-9_@.]+$#", rgpost( 'input_1' )) ) {
    //         $id_arr[] = 1;
    //         $msg_arr[1] = "Email address must not contain special characters";
    //     }

    //     /* VALIDATE FIRST NAME */
    //     // -check if field contains special characters
    //     if ( rgpost( 'input_5' ) && !preg_match("#^[A-Za-z.]+$#", rgpost( 'input_5' )) ) {
    //         $id_arr[] = 5;
    //         $msg_arr[5] = "First Name must not contain special characters";
    //     }

    //     /* VALIDATE PASSWORD */
    //     // -check password length
    //      if( rgpost( 'input_4') && strlen(rgpost( 'input_4')) <=5 ){
    //         $id_arr[] = 4;
    //         $msg_arr[4] = "Password must be atleast 6 characters long";
    //     }

    //     // PROCESS VALIDATIONS
    //     if( $id_arr ){
    //         $validation_result['is_valid'] = false;
    //         foreach( $form['fields'] as &$field ) {
    //             if ( in_array($field->id, $id_arr) ) {
    //                 $field->failed_validation = true;
    //                 $field->validation_message = $msg_arr[$field->id];
    //             }
    //         }
    //     }

    // }

    $validation_result['form'] = $form;
    return $validation_result;

}

/* Gravity forms confirmation (after validate) */
add_filter( 'gform_confirmation', 'gform_custom_confirmation', 10, 4 );
function gform_custom_confirmation( $confirmation, $form, $entry, $ajax ) {

    /* LOGIN USER */
    // if($form['id'] == 1){
    //     $creds = array();
    //     // if ( rgar( $entry, '4.1' ) == 'true' ) {
    //     //     $creds['remember'] = true;
    //     // }else{
    //     //     $creds['remember'] = false; 
    //     // }

    //     $creds['user_login'] = $entry[1];
    //     $creds['user_password'] = $entry[2];
    //     wp_signon( $creds, false );
    // }

    // /* INSERT USER */
    // elseif($form['id'] == 2){
    //     $userdata = array(
    //         'user_login'  =>  $entry[1],
    //         'first_name'  =>  $entry[5],
    //         'user_email'  =>  $entry[1],
    //         'user_pass'   => $entry[4],

    //     );

    //     //create new user
    //     $user_id = wp_insert_user( $userdata );
    // }

    // /* FORGOT PASSWORD FORM */
    // elseif($form['id'] == 3){

    // 	$email = $entry[1];
    //     $user = get_user_by( 'email', $email ); //get user details by email
    //     $id = $user->ID;
    //     $u_data = get_userdata($id); //get user details by id
    //     $fname = $u_data->first_name;
    //     $lname = $u_data->last_name;

    //     $cur_date = strtotime(date('M-d-Y')); //convert current date to numbers

    //     $forgot = array(
    //         'email' => $email,
    //         'id' => $id,
    //         'date' => $cur_date
    //     );

    //     $encode = json_encode($forgot);
    //     $e1 = base64_encode($encode); // first decode
    //     $e2 = base64_encode($e1); // second decode

    //     // $nonce = wp_create_nonce( 'reset_password' );
    //     // $data = '?id='.$id.'&nonce='.$nonce;
    //     $key = '?key='.$e2; // contains encrypted user details

    //     $reset_url_link = home_url('change-password').$key;
        
    //     $to = $email;
    //     $subject = 'Reset Password';
    //     $body = '';
    //     $body .= '<p>Hello '.$fname.' '.$lname.',</p>';
    //     $body .='<p>We received a request to reset the password to your account in <a href="'.home_url().'">'.get_bloginfo( 'title' ).'</a>. If you did not request a password reset, please ignore this e-mail.</p>'; 
        
    //     $body .='<p>If you wish to finalize your password reset, please <a href="'.$reset_url_link.'">click here</a></p>';
        
    //     $headers = array('Content-Type: text/html; charset=UTF-8');
    //     $mail = wp_mail( $to, $subject, $body, $headers );

    //     if($mail){
    //         $confirmation = $confirmation;
    //     }else{
    //         $confirmation = "<h4>An error occured, please try again later.</h4>";           
    //     }
    // }

    // /* CHANGE PASSWORD FORM */
    // elseif($form['id'] == 4){

    // 	$key = $_GET['key'];

    //     $d1 = base64_decode($key);
    //     $d2 = base64_decode($d1);
    //     $decode = json_decode($d2);

    //     // get decoded json
    //     $d_id = $decode->id;

    //     $new_password = $entry[1];

    //     // save new password
    //     wp_set_password( $new_password,$d_id );
    //     $u_data = get_userdata( $d_id );
    //     $username = $u_data->user_login;
    //     $creds = array();

    //     // create the credentials array
    //     $creds['user_login'] = $username;
    //     $creds['user_password'] = $new_password;
    //     // $creds['remember'] = true;
    //     // $sign = wp_signon( $creds,false );

    // 	$confirmation = array( 'redirect' => home_url('login') );
        
    // }


    // $confirmation = array( 'redirect' => home_url() );

    return $confirmation;

}


