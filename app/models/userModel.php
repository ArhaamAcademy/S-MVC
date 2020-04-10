<?php

class userModel extends Database{

    public function userSignup($name, $email, $password){

         if($this->Query("INSERT INTO user (name, email, password) VALUES(?,?,?)", [$name, $email, $password])){

            return true;
         }else{

            return false;
         }
        
    }
}