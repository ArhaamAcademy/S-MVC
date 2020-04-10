<?php

class profile extends BaseController{

    public function __construct(){

        if(!$this->getSession('userId')){

            $this->redirect("account/signin");
        }

        $this->helper("link");

    }

    public function index(){

        $this->view("profile");

    }
}

?>