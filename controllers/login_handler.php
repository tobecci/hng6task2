<?php
// controller for login

$root = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') ;
$path =$root.'/models/model.php' ;

require_once($path) ;

//check the HTTP Request method 
if(filter_input(INPUT_SERVER, 'REQUEST_METHOD')=='POST'){
    $password = filter_input(INPUT_POST, 'password') ;
    $email = filter_input(INPUT_POST, 'email') ;
    
    $isValid = $model::validate($email , $password); 
     if($isValid){//redirect control to the success page
         $success_path = $root.'/success.php' ;
          header("Location: ".$success_path) ;
     }
     else{// redirect control to index.php but with an error message passed through the POST associative array
         $error_message = 'Invalid Entry' ;
         $_POST['error_message'] =$error_message ;
         $index_path = $root.'/index.php'  ;
         header("Loacation: ".$index_path) ;
     }
}



?>