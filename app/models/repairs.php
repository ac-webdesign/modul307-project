<?php

class Repairs
{
    // Variablen
    public $id;
    public $firstName;
    public $lastName;
    public $email;
    public $telephone;
    public $urgent;
    public $isDone;
    public $startDate;
    public $tool;
    public $db;

    // Konstruktor
    function __construct($firstName = null, $lastName = null, $email = null, $telephone = null, int $urgent = null, $isDone = null, $startDate = null, $toolId = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->urgent = $urgent;
        $this->isDone = $isDone === "Auftrag ist abgeschlossen" ? true : false;
        $this->startDate = $startDate;
        $this->tool = $tool;
        $this->db = connectToDatabase();
    }

    // Methoden
    public function getById(int $id)
    {
        $getByIdStatement = $this->db->prepare('SELECT * FROM `repairs` WHERE id = :id ');
        $getByIdStatement->bindParam(':id', $id);
        $getByIdStatement->execute();
        return $getByIdStatement->fetch();
    }

    public function create()
    {
        $insertStatement = $this->db->prepare(
            'INSERT INTO `repairs` 
            (id, firstname, lastname, email, telephone, urgent, is_done, startdate, fk_tool) 
            VALUES (null, :firstName, :lastName, :email, :telephone, :urgent, :isDone, :startDate, :tool)
            '
        );
        $insertStatement->bindParam(':firstName', $this->firstName);
        $insertStatement->bindParam(':lastName', $this->lastName);
        $insertStatement->bindParam(':email', $this->email);
        $insertStatement->bindParam(':telephone', $this->telephone);
        $insertStatement->bindParam(':urgent', $this->urgent);
        $insertStatement->bindParam(':isDone', $this->isDone);
        $insertStatement->bindParam(':startDate', $this->startDate);
        $insertStatement->bindParam(':tool', $this->tool);
        $insertStatement->execute();
    }

    public function update(int $id): bool
    {
        $updateStatement = $this->db->prepare(
            'UPDATE `repairs` 
            SET firstname=:firstName, 
             lastname=:lastName, 
             email=:email, 
             telephone=:telephone, 
             urgent=:urgent, 
             is_done=:isDone, 
             startdate=:startDate, 
             fk_tool=:tool 
            WHERE id = :id 
            '
        );
        $updateStatement->bindParam(':id', $id);
        $updateStatement->bindParam(':firstName', $this->firstName);
        $updateStatement->bindParam(':lastName', $this->lastName);
        $updateStatement->bindParam(':email', $this->email);
        $updateStatement->bindParam(':telephone', $this->telephone);
        $updateStatement->bindParam(':urgent', $this->urgent);
        $updateStatement->bindParam(':isDone', $this->isDone);
        $updateStatement->bindParam(':startDate', $this->startDate);
        $updateStatement->bindParam(':tool', $this->tool->id);      
        return $updateStatement->execute();
    }

    public function delete(int $id): bool
    {
        $deleteStatement = $this->db->prepare('DELETE FROM `repairs` WHERE id = :id ');
        $deleteStatement->bindParam(':id', $id);
        return $deleteStatement->execute();
    }
}
