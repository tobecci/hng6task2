<?php
// controller for signup

$path ='../models/Model.php' ;

require_once($path) ;

//check the HTTP Request method 
if(filter_input(INPUT_SERVER, 'REQUEST_METHOD')=='POST'){
    $password = filter_input(INPUT_POST, 'password') ;
    $email = filter_input(INPUT_POST, 'email') ; 
    
    $entryIsSuccess = Model::add_entry($email , $password) ;
    
    if($entryIsSuccess){ //redirect control to the login page(index.php) with a indicator of successful signup
        require_once "../pages/success.php";
    }
    else{// return to the signup page with a text indicator of signup error
        require_once "../index.php";
    } 
}
    
?>