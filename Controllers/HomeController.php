<?php
    namespace Controllers;

    use \Exception as Exception;

    class HomeController{


        public function showHome($message = ""){
            require_once VIEWS_PATH . 'Login.php';
        }

    }

                 
?>