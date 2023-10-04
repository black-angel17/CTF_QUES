<?php

class Session{


    public static function start(){
        session_start();
    }
    
    public static function unset(){
        session_unset();
// delete all values inside this global static array thing
    }
    
    public static function destroy(){
        session_destroy();

    }

    public static function set($key, $value){

        $_SESSION[$key] = $value;
     
    }
    public static function get($key){
        if (isset($_SESSION[$key])){

        return $_SESSION[$key];
        }
        else{
            return false;
        }
       


    }
    
    public static function delete($key){

        unset($_SESSION[$key]);



    }
}




