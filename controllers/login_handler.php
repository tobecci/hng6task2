<?php session_start();
// controller for login
$_SESSION['username'] =  filter_input(INPUT_POST, 'username');
$_SESSION['password'] =  filter_input(INPUT_POST, 'password');
$path = '../models/Model.php';

require_once($path);

//check the HTTP Request method 
<<<<<<< HEAD
if(filter_input(INPUT_SERVER, 'REQUEST_METHOD')=='POST'){
    $password = filter_input(INPUT_POST, 'password') ;
    $email = filter_input(INPUT_POST, 'email') ;
    
<<<<<<< HEAD
    $isValid = $model::validate($email , $password); 
=======
    $isValid = Model::validate($email , $password) ; 
>>>>>>> 0e705535fa3eb7559029ca5209fe02c73ff8410e
     if($isValid){//redirect control to the success page
         session_destroy();
         $success_path = '../pages/success.php' ;
          header("Location: ".$success_path) ;
     }
     else{// redirect control back to login( index.php)
         $index_path = '../index.php'  ;
         header("Location: ".$index_path) ;
     }
=======
if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
    $password = filter_input(INPUT_POST, 'password');
    $email = filter_input(INPUT_POST, 'email');

    $isValid = Model::validate($email, $password);
    if ($isValid) { //redirect control to the success page
        session_destroy();
        $success_path = '../pages/success.php';
        header("Location: " . $success_path);
    } else { // redirect control back to login( index.php)
        $index_path = '../index.php';
        header("Location: " . $index_path);
    }
>>>>>>> c81f6995805166e800fd2f1f1abe74c5aaf6e38f
}
