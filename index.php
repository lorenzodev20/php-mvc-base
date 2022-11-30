<?php
require_once 'autoload.php';

$msgNotFound = "la página que buscas no existe";

if (isset($_GET["controller"])){
    $nameController = $_GET["controller"].'Controller';
}else{
    echo $msgNotFound;
    exit();
}

if (class_exists($nameController)){
    $controller = new $nameController();
    if (isset($_GET["action"]) && method_exists($controller,$_GET["action"])){
        $action = $_GET["action"];
        $controller->$action();
    }else{
        echo $msgNotFound;
    }
}else{
    echo $msgNotFound;
}