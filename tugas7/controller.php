<?php

require_once 'db.php';

class Prestasi
{
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function getAllPrestasi()
    {
        return $this->db->table('prestasi')->get();
    }

}