<?php

namespace Controllers;

use DAO\CategoryDAO;

class CategoryController
{
    private $categoryDao;

    public function __construct()
    {
        $this->categoryDao = new CategoryDAO();
    }

    public function addCategoryView()
    {
        $categories = $this->categoryDao->get();
        require_once VIEWS_PATH . 'AddCategory.php';
    }
    public function addCategory($name)
    {
        $this->categoryDao->add($name);
        require_once VIEWS_PATH . 'AddCategory.php';
    }
    public function editCategory($id, $name)
    {
        $this->categoryDao->edit($id,$name);
        require_once VIEWS_PATH . 'AddCategory.php';
    }
}