<?php

namespace models;

use core\Model;

class Account extends Model
{
    public function getDataUser()
    {
        $querySelect = "SELECT ID, `Name`, Login, Password FROM users";
        return $this->db->row($querySelect);
    }

    public function saveDataUser($data)
    {
        $name = $data['name'];
        $login = $data['login'];
        $pass = $data['pass'];

        $queryInsert = "INSERT INTO users (`Name`, `Login`, `Password`) VALUES ('$name', '$login', '$pass')";

        if ($this->db->dbQuery($queryInsert))
            return true;
        return false;
    }

    public function getProduct($id)
    {
        $querySelect = 'SELECT `Name`, Price, Massa, Picture FROM products WHERE id = ' . $id;
        return $this->db->row($querySelect);
    }

    public function addProduct($id_user, $data)
    {
        $name = $data['Name'];
        $price = $data['Price'];
        $massa = $data['Massa'];
        $picture = $data['Picture'];

        $queryInsert = "INSERT INTO carts (`Name`, Price, Massa, Picture, id_user) 
                        VALUES ('$name', '$price', '$massa', '$picture', '$id_user')";

        if ($this->db->dbQuery($queryInsert))
            return true;
        return false;
    }

    public function getCarts($id_user)
    {
        $querySelect = "SELECT * FROM carts WHERE id_user = " . $id_user;
        return $this->db->row($querySelect);
    }

    public function deleteCart($id)
    {
        $queryDelete = 'DELETE FROM carts WHERE ID =' . $id;
        $this->db->dbQuery($queryDelete);
    }
}
