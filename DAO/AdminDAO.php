<?php 

namespace DAO;

use Exception;
use Models\Admin as Admin;

class AdminDAO
{
    private $connection;
    private $tableName = "admin";

    public function getLogin($username, $password)
    {
        $query = "SELECT * FROM admin where username = :username and password = :password";
        $parameters['username'] = $username;
        $parameters['password'] = $password;
        try {
            $this->connection = Connection::GetInstance();
            $results = $this->connection->execute($query,$parameters);
        } catch (Exception $th) {
            throw $th;
        }
        $user = "";
        if(!empty($result))
        {
            
            foreach($results as $result)
            {
                $user = new Admin($result['id'], $result['username'],$result['password']);
            }
            return $user;
        }
        return $query;
    }
}