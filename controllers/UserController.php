<?php

class UserController{
    public function index(){
        echo "Controllador ".__CLASS__." acción index";
    }

    public function register()
    {
        require_once 'views/users/register.php';
    }

    public function save(){
        var_dump($_POST);
    }
}