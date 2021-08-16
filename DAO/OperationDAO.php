<?php 

namespace DAO;

use Exception;
use Models\Operation;
use Models\Category;

class OperationDAO
{
    private $connection;
    private $tableName;

    public function add($description, $mount, $type, $category, $dateof)
    {
        $query = "INSERT INTO $this->tableName (description, mount, type, category, dateof) values (:description, :mount, :type, :category, :dateof);";
        $parameters['description'] = $description;
        $parameters['mount'] = $mount;
        $parameters['type'] = $type;
        $parameters['category'] = $category;
        $parameters['dateof'] = $dateof;

        try {
            $this->connection = Connection::GetInstance();
            $this->connection->ExecuteNonQuery($query, $parameters);
        } catch (Exception $th) {
            throw $th;
        }
    }
    public function get()
    {
        $query = "SELECT o.description, o.mount, o.type, o.dateof, c.id as categoryId, c.name as categoryName FROM operation o LEFT JOIN categories c on c.id = o.id_category;";
        try {
            $this->connection = Connection::GetInstance();
            $results = $this->connection->Execute($query);
        } catch (Exception $th) {
            throw $th;
        }
        $operations = array();
        if(!empty($results))
        {
            foreach($results as $result)
            {
                array_push($operations, new Operation($result['id'],$result['description'],$result['mount'],$result['type'],new Category($result['categoryId'],$result['categoryName']),$result['dateof']));
            }
        }
        return $results;
    }
}