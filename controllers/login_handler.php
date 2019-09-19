<?php session_start();
// controller for login
$_SESSION['username'] =  filter_input(INPUT_POST, 'username');
$_SESSION['password'] =  filter_input(INPUT_POST, 'password');
$path = '../models/Model.php';

require_once($path);

//check the HTTP Request method 

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

}
