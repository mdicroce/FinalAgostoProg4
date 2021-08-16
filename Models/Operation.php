<?php 

namespace Models;

class Operation
{
    private $description;
    private $id;
    private $mount;
    private $type;
    private $category;
    private $dateof;

    public function __construct($id, $description, $mount, $type, $category, $dateof)
    {
        $this->description = $description;
        $this->id = $id;
        $this->mount = $mount;
        $this->type = $type;
        $this->category = $category;
        $this->dateof = $dateof;
    }

    public function getId(){return $this->id;}
    public function getDescription(){return $this->description;}
    public function getMount(){return $this->mount;}
    public function getType() {return $this->type;}
    public function getCategory() {return $this->category;}
    public function getDate() {return $this->dateof;}

    public function setId($id){$this->id = $id;}
    public function setDescription($description){$this->description = $description;}
    public function setMount($mount){$this->mount = $mount;}
    public function setType($type){$this->type = $type;}
    public function setCategory($category){$this->category = $category;}
    public function setDate($dateof){$this->dateof = $dateof;}
}