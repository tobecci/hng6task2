<?php
// controller for signup


$path ='../models/model.php' ;

require_once($path) ;

//check the HTTP Request method 
if(filter_input(INPUT_SERVER, 'REQUEST_METHOD')=='POST'){
    $password = filter_input(INPUT_POST, 'password') ;
    $email = filter_input(INPUT_POST, 'email') ; 
    
    $entryIsSuccess = Model::addEntry($email , $password) ;
    
    if($entryIsSuccess){ //redirect control to the login page(index.php) with a indicator of successful signup
        $login_path = $root.'/index.php' ;
        header("Location: ".$login_path) ;
    }
    else{// return to the signup page with a text indicator of signup error
        $signup_path = $root.'/signup.php' ;
        header("Location: ".$signup_path) ;
    } 
}
    
?>