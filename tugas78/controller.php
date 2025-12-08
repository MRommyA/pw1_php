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

    function getPrestasiById($id)
    {
        return $this->db->table('prestasi')->where(['id' => $id])->get();
    }

    function createPrestasi($data)
    {
        return $this->db->table('prestasi')->insert($data);
    }

    function updatePrestasi($id, $data)
    {
        return $this->db->table('prestasi')->where(['id' => $id])->update($data);
    }

    function deletePrestasi($id)
    {
        return $this->db->table('prestasi')->where(['id' => $id])->delete();
    }
}