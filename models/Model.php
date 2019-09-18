<?php
class Model
{
    public function __construct()
    {
        $this->name = "model";
    }

    public function add_entry($email, $password)
    {
        $array = array("username" => $email, "password" => password_hash($password, PASSWORD_DEFAULT));
        //declaring the store.json     
        $filetxt = 'store.json';
        //declaring an empty array
        $arr_data   = [];
        //fetching existing file from store.json
        $json_data  = file_get_contents($filetxt);
        //decoding/converting the json object to php array string from store.json
        $arr_data   = json_decode($json_data, true);
        //append the array with new form data
        $arr_data[] = $array;
        //decoding/converting php array string  to json object 
        $json_data  = json_encode($arr_data);
        //storing the final data into store.json     
        file_put_contents($filetxt, $json_data);
        return true;
    }

    public static function validate($email, $password)
    { }

    public function delete_entry()
    { }

    public function edit_password()
    { }
}

/*
You are to implement just 
1)addEntry 
2)validate
1) validate ...takes two parameters... eMail and password...first,harsh the password ...
turn the email and hashed password to a JSON string ...append it to the string in the storage.json file.
.. return a Boolean when the process is done..
2)validate...takes email and password ...use json_decode to decode the string in the storage.json file...
since it returns an array....loops through it to check if there is an email that has a value equal to the one passed in 
...if there is , check if the password matches the hashed password that corresponds to that email...if it does , 
returns true if not return false...if the email doesn't extend return false too.
Those are two functions you are to implement....we are not deleting values ...and we are not editing password...
at least they just asked us to implement login  and signuy
sign-up*
*/
