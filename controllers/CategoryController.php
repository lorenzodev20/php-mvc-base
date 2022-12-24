<?php

require_once 'models/CategoryModel.php';

class CategoryController
{
    public function __construct()
    {
        Utils::isAdmin();
    }
    public function index()
    {
        $category = new Category();
        $categories = $category->getAll();
        require_once 'views/category/index.php';
    }

    public function create()
    {
        require_once 'views/category/create.php';
    }

    public function save()
    {
        $_SESSION["category_create_status"] = "failed";

        if (isset($_POST) && isset($_POST["nombre"])){
            $category = new Category();
            $category->setNombre($_POST["nombre"]);
            if($category->save()){
                $_SESSION["category_create_status"] = "complete";
            }
        }
        header("Location:" . base_url . 'category/index');
    }
}