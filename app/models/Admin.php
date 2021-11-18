<?php

namespace models;

use core\Model;

class Admin extends Model
{
    public function createProduct()
    {
        if (isset($_POST) && !empty($_POST)) {
            $photoName = null;
            if (isset($_FILES['photo']) && !empty($_FILES['photo'])) {
                $tmp_name = $_FILES['photo']['tmp_name'];
                $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
                $photoName = uniqid() . "." . $ext;
                move_uploaded_file($tmp_name, ROOT . "/public/assets/img/" . $photoName);
            }
            $query = "INSERT INTO products 
                            (`Name`, Price, Massa, Picture, id_c) 
                        VALUES 
                            ('{$_POST['name']}', '{$_POST['price']}', 
                                '{$_POST['massa']}', '{$photoName}',
                                    '{$_POST['idCategory']}'
            )";
            $this->db->dbQuery($query);
        }
    }
    public function getCategory()
    {
        $query = "SELECT ID, Categoria FROM categoria";
        $resultQuery = $this->db->row($query);
        return $resultQuery;
    }
    public function getProducts()
    {
        $querySelect = "SELECT ID, `Name`, Price, Massa FROM products";
        $result = $this->db->row($querySelect);
        return $result;
    }
    public function getProductById($id)
    {
        $querySelect = "SELECT 
                            products.ID, products.Name, products.Price,
                            products.Massa, products.Picture, products.Date_create,
                            products.Date_modif, categoria.Categoria, products.id_c
                        FROM products 
                        INNER JOIN categoria on
                        products.id_c = categoria.ID
                        WHERE products.ID =" . $id;
        $result = $this->db->row($querySelect);
        return $result;
    }
    public function deleteProduct($id)
    {
        $queryDelete = "DELETE FROM products WHERE ID =" . $id;
        $this->db->dbQuery($queryDelete);
    }

    public function updateProduct($id)
    {
        if (isset($_POST) && !empty($_POST)) {
            $photoName = null;
            if (isset($_FILES['photo']) && !empty($_FILES['photo'])) {
                $tmp_name = $_FILES['photo']['tmp_name'];
                $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
                $photoName = uniqid() . "." . $ext;
                move_uploaded_file($tmp_name, ROOT . "/public/assets/img/" . $photoName);
            }
            $queryUpdate = "UPDATE products 
                            SET `Name` = '{$_POST['name']}', Price = '{$_POST['price']}', 
                                Massa = '{$_POST['massa']}', Picture = '{$photoName}', 
                                id_c = '{$_POST['idCategory']}'
                            WHERE ID =" . $id;

            if ($this->db->dbQuery($queryUpdate)) {
                echo "OK";
            } else {
                echo "NO";
            }
        }
    }
}
