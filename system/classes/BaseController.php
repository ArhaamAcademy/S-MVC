<?php
error_reporting(0);
class BaseController{
    
    public function view($viewName, $data = []){

        if(file_exists("../app/views/" . $viewName . ".php")){

            require_once("../app/views/$viewName.php");
        }else{

            echo 'View is not exist';
        }
    }

    public function model($modelName){

        if(file_exists("../app/models/" . $modelName . ".php")){

            require_once "../app/models/$modelName.php";
            return new $modelName;
        }else{

            echo 'Model is not exist';
        }

    }

    public  function input($inputName)
    {
        if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post"){

            return trim(strip_tags($_POST[$inputName]));

        }elseif($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == "get"){

            return trim(strip_tags($_GET[$inputName]));

        }
    }

    public function helper($helperName){

        if(file_exists("../system/helpers/".$helperName.".php")){

            require_once "../system/helpers/".$helperName.".php";

        }else{

            echo "helper not found";

        }

    }

    public function setSession($sessionName, $sessionValue){

        if(!empty($sessionName) && !empty($sessionValue)){

            $_SESSION[$sessionName] = $sessionValue; 
        }
    }

    public function getSession($sessionName){

        if(!empty($sessionName)){
            return $_SESSION[$sessionName];
        }
    }

    public function unsetSession($sessionName){
    
        if(!empty($sessionName)){

            unset($_SESSION[$sessionName]);
        }
    }

    public function destroy(){

        session_destroy();
    }

    public function setFlash($sessionName, $msg){

        if(!empty($sessionName) && !empty($msg)){

            $_SESSION[$sessionName] = $msg;
        }

    }

    public function flash($sessionName, $className){

        if(!empty($sessionName) && !empty($className) && isset($_SESSION[$sessionName])){

            $msg = $_SESSION[$sessionName];

            echo "<div class='". $className ."'>". $msg ."</div>";
            unset($_SESSION[$sessionName]);
        }
    }

    public function redirect($path){

        header("location:" . BASEURL . "/".$path);
    }
}