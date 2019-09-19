<?php
class Model
{
    public function __construct()
    {
        $this->name = "model";
    }

    /**
     * function for adding data to the username and password field
     */
    public static function add_entry($email, $password)
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
    {
        $check = false;
        $users = json_decode(file_get_contents('store.json'));
        foreach ($users as $user) {
            if ($user->username === $email) {
                if (password_verify($password, $user->password)) {
                    $check = true;
                }
            }
        }
        return $check;
    }

    public static function user_exists($email)
    {
        $check = false;
        $users = json_decode(file_get_contents('store.json'));
        foreach ($users as $user) {
            if ($user->username === $email) {
                $check = true;
            }
        }
        return $check;
    }

    public function delete_entry()
    { }

    public function edit_password()
    { }
}


// echo $model->validate("admin", "admin");

var_dump($model->user_exists("tobecci"));
