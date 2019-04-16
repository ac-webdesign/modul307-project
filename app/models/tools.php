<?php

class Tools
{
    // Variablen
    public $id;
    public $name;
    public $db;

    // Konstruktor
    function __construct($id = null)
    {
        $this->id = $id;
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

    public function create()
    {
        $insertStatement = $this->db->prepare(
            'INSERT INTO `tools` (id, name) 
             VALUES (null, :name)
            '
        );
        $insertStatement->bindParam(':name', $this->name);
        $insertStatement->execute();
    }

    public function update(int $id): bool
    {
        $updateStatement = $this->db->prepare(
            'UPDATE `tools` 
            SET name=:name, 
            WHERE id = :id 
            '
        );
        $updateStatement->bindParam(':id', $id);
        $updateStatement->bindParam(':name', $this->name);
        return $updateStatement->execute();
    }

    public function delete(int $id): bool
    {
        $deleteStatement = $this->db->prepare('DELETE FROM `tools` WHERE id = :id ');
        $deleteStatement->bindParam(':id', $id);
        return $deleteStatement->execute();
    }
}
