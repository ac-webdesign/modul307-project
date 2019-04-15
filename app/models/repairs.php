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
    public $endDate;
    public $tool;
    public $db;

    // Konstruktor
    function __construct($firstName, $lastName, $email, $telephone = null, $urgent, $isDone, $startDate, $tool)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->urgent = $urgent;
        $this->isDone = $isDone;
        $this->startDate = $startDate;
        $this->endDate = $startDate + $urgent;
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
            (id, firstname, lastname, email, telephone, urgent, is_done, startdate, enddate, fk_tool) 
            VALUES (null, :firstName, :lastName, :email, :telephone, :urgent, :isDone, :startDate, :endDate, :tool)
            '
        );
        $insertStatement->bindParam(':firstName', $this->firstName);
        $insertStatement->bindParam(':lastName', $this->lastName);
        $insertStatement->bindParam(':email', $this->email);
        $insertStatement->bindParam(':telephone', $this->telephone);
        $insertStatement->bindParam(':urgent', $this->urgent);
        $insertStatement->bindParam(':isDone', $this->isDone);
        $insertStatement->bindParam(':startDate', $this->startDate);
        $insertStatement->bindParam(':endDate', $this->endDate);
        $insertStatement->bindParam(':tool', $this->tool);
        $insertStatement->execute();
    }

    public function update(int $id): bool
    {
        $updateStatement = $this->db->prepare(
            'UPDATE `repairs` 
            SET firstname=:firstName, 
            SET lastname=:lastName, 
            SET email=:email, 
            SET telephone=:telephone, 
            SET urgent=:urgent, 
            SET is_done=:isDone, 
            SET startdate=:startDate, 
            SET enddate=:endDate, 
            SET tool=:tool, 
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
        $updateStatement->bindParam(':endDate', $this->endDate);
        $updateStatement->bindParam(':tool', $this->tool);
        return $updateStatement->execute();
    }

    public function delete(int $id): bool
    {
        $deleteStatement = $this->db->prepare('DELETE FROM `repairs` WHERE id = :id ');
        $deleteStatement->bindParam(':id', $id);
        return $deleteStatement->execute();
    }
}
