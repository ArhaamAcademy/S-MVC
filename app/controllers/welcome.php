<?php
class welcome extends BaseController{

    public function __construct(){
        $this->helper("link");
    }

    public function index(){
        $this->view("welcome");
    }
}