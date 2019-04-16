<?php

class Tools
{
    // Variablen
    public $id;
    public $name;
    public $db;

    // Konstruktor
    function __construct($id = null, $name = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->db = connectToDatabase();
    }

    // Methoden
    public function getById(int $id)
    {
        $getByIdStatement = $this->db->prepare('SELECT * FROM `tools` WHERE id = :id ');
        $getByIdStatement->bindParam(':id', $id);
        $getByIdStatement->execute();
        return $getByIdStatement->fetch();
    }
}
