<?php

//the registration form data is being stored in store.json
  if (isset($_POST["register"])) {
      $name = $_POST["username"];
      $name = $_POST["password"];
//the keys and values of the form data
      $array = array("username"=>$_POST["username"],"password"=>$_POST["password"]);
//declaring the store.json     
      $filetxt = 'store.json';
//declaring an empty array
      $arr_data   = [];
//fetching existing file from store.json
      $json_data  = file_get_contents($filetxt);
//decoding/converting the json object to php array string from store.json
      $arr_data   = json_decode($json_data, true);

//append the array with new form data
       $arr_data[] =$array;
//decoding/converting php array string  to json object 
      $json_datas  = json_encode($arr_data);
//storing the final data into store.json     
      file_put_contents($filetxt, $json_datas);

  }
//json to php array
function json_php_array(){
    $json = 
  	'[{
        "username":"ade",
        "password":"pass123"
    },

    {
    	"username":"ade",
        "password":"pass123"
    }]';


$decode_json  = json_decode($json);
return true;
}
 

//php array to json
function array_to_json(){
    $array = [
			[
				"username"=>"ade",
				"password"=>"123"
			],

			[
				"username"=>"ade",
				"password"=>"1234"
			],

];
$encode_array = json_encode($array);
return true;
}

function logout(){
    if (session_destroy()) {
    	return true;
    }
  }
?>