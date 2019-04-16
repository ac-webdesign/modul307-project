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
}
