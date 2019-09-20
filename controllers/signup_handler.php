<?php session_start();
// controller for signup

$path ='../models/Model.php' ;

require_once($path) ;

//check the HTTP Request method 
if(filter_input(INPUT_SERVER, 'REQUEST_METHOD')=='POST'){
    $password = filter_input(INPUT_POST, 'password') ;
    $email = filter_input(INPUT_POST, 'email') ; 
    $name = filter_input(INPUT_POST, 'fname') ; 
    
    $entryIsSuccess = Model::add_entry($name, $email , $password) ;
    if($entryIsSuccess){ //redirect control to success page
        session_destroy() ;
        header("Location: ../pages/success.php");
    }
    else{//keep track of the email and return to the signup page
        $_SESSION['email']=$email ;
        header("Location: ../signup.php");
    } 
}
    