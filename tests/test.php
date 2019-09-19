<?php

class testclass{


  public function test_addentry_function($username,$password, $userdb_in_php){
    $isUserDbUpdate = $model::addEntry($username,$password);
    if ($isUserDbUpdate){
      for ($i=0; $i <count($userdb_in_php) ; $i++) {
        foreach ($userdb_in_php as $key => $value) {
         if($username == $value->username){
            if ($password == $value->password){
              echo "Test Passed";
            }else {
              echo "Test Failed";
            }
         }else {
          echo "Test Failed";
          }
    }}
  }else {
    echo "Test Passed";
  }

  }

  public function test_validate_function($email, $password,$userdb_in_php ){
    $newlog = $model::validate($email, $password);
    if ($newlog) {
      for ($i=0; $i <count($userdb_in_php) ; $i++) {
      foreach ($userdb_in_php as $key => $value) {
        if($username == $value->email) {
          if($Password == $value->password){
            echo "Test passed";
          }else {
            echo "Test Failed";
        }
      }else {
      echo "Test Failed";
    }
  }}
  }else {
      echo "Test Passsed";
    }
      }
}

/* This is a sample of $userdb_in_php...
$userdb_in_php = array(

  array('fullname'=>'administrator',
        'username' => 'admin',
        'email' => 'admin@hotdog.com',
        'password' => 'administration'
        ),
  array('fullname'=>'emmanuel james',
        'username' => 'emmanuel',
        'email' => 'emma@hotdog.com',
        'password' => 'johnson123'
        ),
  array('fullname'=> 'josiah jepherson',
        'username' => 'josiah',
        'email' => 'josh@hotdog.com',
        'password' => 'josiah245'
      ),

);*/
?>
