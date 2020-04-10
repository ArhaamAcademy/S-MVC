<?php

class Account extends BaseController{

    public function __construct(){

        if($this->getSession("userId")){

            $this->redirect("profile");
        }

        $this->helper("link");
        $this->accountModel = $this->model('accountModel');
    }

    public function index(){

        $this->view("signup");
    }

    public function signin(){

        $this->view("signin");
    }

    public function signup(){        

        $userData = [

            'name'          => $this->input('name'),
            'email'         => $this->input('email'),
            'password'      => $this->input('password'),
            'nameError'     => '',
            'emailError'    => '',
            'passwordError'      => ''

        ];

        if(empty($userData['name'])){

            $userData['nameError'] = 'Name is required';
        }

        if(empty($userData['email'])){

            $userData['emailError'] = 'Email is required';
        }else{

            if(!$this->accountModel->checkEmail($userData['email'])){

                $userData['emailError'] = 'Sorry this email is already exist';

            }

        }

        if(empty($userData['password'])){

            $userData['passwordError'] = 'Password is required';
        }elseif(strlen($userData['password']) < 5){

            $userData['passwordError'] = 'Password must be atleast 5 charectors long';

        }

        if(empty($userData['nameError']) && empty($userData['emailError']) && empty($userData['passwordError'])){

            $password = password_hash($userData['password'], PASSWORD_DEFAULT);
            $data = [$userData['name'], $userData['email'], $password];

            if($this->accountModel->signup($data)){

                $this->setFlash("accountCreated", "Your account has been created successfully");
                $this->redirect("account/signin");
                

                
            }
            
        }else{

            $this->view("signup", $userData);
        }

    } 

    public function login(){

        $userData = [

            'email'             => $this->input('email'),
            'password'          => $this->input('password'),
            'emailError'        => '',
            'passwordError'     => ''
        ];

        if(empty($userData['email'])){

            $userData['emailError'] = 'Email is required';
        }

        if(empty($userData['password'])){

            $userData['passwordError'] = 'Password is required';
        }

        if(empty($userData['emailError']) && empty($userData['passwordError'])){

            $result = $this->accountModel->login($userData['email'], $userData['password']);

            if($result['status'] === 'EmailNotFound'){

                $userData['emailError'] = 'Sorry invalid email';
                $this->view("signin", $userData);

            }elseif($result['status'] === 'PasswordNotMatcheds'){

                $userData['passwordError'] = 'Sorry invalid password';
                $this->view("signin", $userData);

            }elseif($result['status'] === 'OK'){

                $this->setSession("userId", $result['data']);
                $this->redirect("profile");

            }

        }else{

            $this->view("signin", $userData);
        }
    }

    public function logout(){

        $this->destroy();
        $this->redirect("account/signin"); 
    }

    

}