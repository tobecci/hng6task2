<?php
// controller for signup

$path ='../models/Model.php' ;

require_once($path) ;

//check the HTTP Request method 
if(filter_input(INPUT_SERVER, 'REQUEST_METHOD')=='POST'){
    $password = filter_input(INPUT_POST, 'password') ;
    $email = filter_input(INPUT_POST, 'email') ; 
    $name = filter_input(INPUT_POST, 'fname') ; 
    
<<<<<<< HEAD
    $entryIsSuccess = Model::addEntry($email , $password) ;
    
=======
    $entryIsSuccess = Model::add_entry($name, $email , $password) ;
>>>>>>> 70b833c2041ebab99e6d4d30dd219580339210d9
    if($entryIsSuccess){ //redirect control to the login page(index.php) with a indicator of successful signup
        header("Location: ../pages/success.php");
    }
    else{// return to the signup page with a text indicator of signup error
        //(by tobecci) i just redirected to index on failure
        header("Location: ../signup.php");
        // require_once "../index.php";
    } 
}
    
?>