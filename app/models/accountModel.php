<?php

class accountModel extends Database{

    public function checkEmail($email){

        if($this->Query("SELECT email FROM user WHERE email=?", [$email])){

            if($this->rowCount() > 0){

                return false;
            }else{

                return true;
            }
        }
    }

    public function signup($data){

        if($this->Query("INSERT INTO user (name, email, password) VALUES(?,?,?)", $data)){

            return true;
        }
    }

    public function login($email, $password){

        if($this->Query("SELECT * FROM user WHERE email = ?",[$email])){

            if($this->rowCount() > 0){

                $row = $this->fetch();
                $dbPassword = $row->password;
                $userId = $row->id;
                if(password_verify($password, $dbPassword)){

                    return ['status' => 'OK', 'data' => $userId];

                }else{

                    return ['status' => 'PasswordNotMatched'];
                }

            }else{

                return ['status' => 'EmailNotFound'];
            }
        }

    }
}

?>