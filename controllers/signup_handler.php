<?php
// controller for signup

$root = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') ;
$path =$root.'/models/model.php' ;

require_once($path) ;
$error_message = 'An error Occured, Try again' ; 
$success_message = 'Successfully Signed up' ;

//check the HTTP Request method 
if(filter_input(INPUT_SERVER, 'REQUEST_METHOD')=='POST'){
    $password = filter_input(INPUT_POST, 'password') ;
    $email = filter_input(INPUT_POST, 'email') ; 
    
    $entryIsSuccess = $model::addEntry($email , $password) ;
    
    if($entryIsSuccess){ //redirect control to the login page(index.php) with a indicator of successful signup
        $_POST['success_message'] =$success_message ;
        $login_path = $root.'/index.php' ;
        header("location: ".$login_path) ;
    }
    else{// return to the signup page with a text indicator of signup error
        $_POST['error_message'] =$error_message ; 
        $signup_path = $root.'/signup.php' ;
        header("location: ".$signup_path) ;
    } 
}
    
?>