<?php

namespace Controllers;

use DAO\AdminDAO;
use Controllers\OperationController as OperationController;
use Models\Admin;

class AdminController
{
    private $adminDao;

    public function __construct()
    {
        $this->adminDao = new AdminDAO();
        
    }

    public function login($username, $password)
    {
        $loggedUser = $this->adminDao->getLogin($username,$password);
        if(!empty($loggedUser))
        {
            session_start();
            $_SESSION['loggedUser'] = $loggedUser;
            $operationController = new OperationController();
            $operationController->dashboardView();
        }
        else
        {
            $message = 'username or password were wrong. Try Again';
            require_once VIEWS_PATH . 'Login.php';
        }
    }
}