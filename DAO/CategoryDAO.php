<?php 

namespace DAO;

use Exception;
use Models\Category;

class CategoryDAO
{
    private $connection;
    private $tableName = "categories";

    public function add($name)
    {
        $query = "INSERT INTO $this->tableName (name) values (:name);";
        $parameters['name'] = $name;

        try {
            $this->connection = Connection::GetInstance();
            $this->connection->ExecuteNonQuery($query, $parameters);
        } catch (Exception $th) {
            throw $th;
        }
    }
    public function get()
    {
        $query = "SELECT * FROM $this->tableName;";
        try {
            $this->connection = Connection::GetInstance();
            $results = $this->connection->Execute($query);
        } catch (Exception $th) {
            throw $th;
        }
        $categories = array();
        if(!empty($results))
        {
            foreach($results as $result)
            {
                array_push($categories, new Category($result['id'], $result['name']));
            }
        }
        return $categories;
    }
    public function edit($id, $name)
    {
        $query = "UPDATE $this->tableName set name=:name where id = :id;";
        $parameters['id'] = $id;
        $parameters['name'] = $name;
        try {
            $this->connection = Connection::GetInstance();
            $this->connection->ExecuteNonQuery($query,$parameters);
        } catch (Exception $th) {
            throw $th;
        }
    }
}