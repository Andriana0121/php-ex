<?php

namespace models;

use core\Model;

class Products extends Model
{
    public function getProducts()
    {
        $query = "SELECT ID, `Name`, Price, Massa, Picture From products";
        $resultQuery = $this->db->row($query);
        return $resultQuery;
    }
    public function getProductById($id)
    {
        $query = "SELECT ID, `Name`, Price, Massa, Picture From products WHERE ID =" . $id;
        $resultQuery = $this->db->row($query);
        return $resultQuery;
    }
}
