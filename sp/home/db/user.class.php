<?php
include_once 'database.class.php';

class user{


public static function signup(){



}

public static  function login($arg1,$arg2){
    Database::make_conn();
    $result = Database::login($arg1,$arg2);
    return $result;


}

public static function Authenticate(){
    

}
 

}