<?php

class Task
{
    // Variablen
    public $id;
    public $title;
    public $state;
    public $db;

    // Konstruktor
    function __construct($title, $state = null)
    {
        $this->title = $title;
        $this->state = $state;
        $this->db = connectToDatabase();
    }

    // Methoden
    public function getById(int $id)
    {
        $getByIdStatement = $this->db->prepare('SELECT * FROM `tasks` WHERE id = :id ');
        $getByIdStatement->bindParam(':id', $id);
        $getByIdStatement->execute();
        return $getByIdStatement->fetch();
    }

    public function create()
    {
        $insertStatement = $this->db->prepare('INSERT INTO `tasks` (id, title) VALUES (null, :title)');
        $insertStatement->bindParam(':title', $this->title);
        $insertStatement->execute();
    }

    public function update(int $id): bool
    {
        $updateStatement = $this->db->prepare('UPDATE `tasks` SET title=:title, state=:state WHERE id = :id ');
        $updateStatement->bindParam(':id', $id);
        $updateStatement->bindParam(':title', $this->title);
        $updateStatement->bindParam(':state', $this->state);
        return $updateStatement->execute();
    }

    public function delete(int $id): bool
    {
        $deleteStatement = $this->db->prepare('DELETE FROM `tasks` WHERE id = :id ');
        $deleteStatement->bindParam(':id', $id);
        return $deleteStatement->execute();
    }
}
