<?php

namespace Controllers;

use DAO\OperationDAO;
use DAO\CategoryDAO;


class OperationController
{

    private $operationDao;
    public function __construct()
    {
        $this->operationDao = new OperationDAO();
    }
    public function dashboardView()
    {
        $operations = $this->operationDao->get();
        require_once VIEWS_PATH . 'Dashboard.php';
    }
    public function addOperationView()
    {
        $categoryDao = new CategoryDAO();
        $categories = $categoryDao->get();
        require_once VIEWS_PATH . 'AddOperation.php';
    }
    public function addOperation($description, $mount, $type, $category, $dateof)
    {
        $this->operationDao->add($description,$mount,$type,$category,$dateof);
        require_once VIEWS_PATH . 'AddOperation.php';
    }
}