<!-- Crear clase productos que permita obtener la lista de productos usando la clase database en database.php -->
<?php
include 'database.php';

class Product
{
    private $db;
    private $conn;

    public function __construct()
    {
        $this->db = new Database();
        $this->conn = $this->db->connect();
    }
    
    //get products
    public function getProducts()
    {
        $products = array();
        $query = $this->conn->query('SELECT * FROM products');

        while($row = $query->fetch_assoc()) {
            $products[] = $row;
        }

        return $products;
    }

    //Add a product
    public function saveProduct($post)
    {
        $name = $this->conn->real_escape_string($post['name']);
        $description = $this->conn->real_escape_string($post['description']);
        $price = $this->conn->real_escape_string($post['price']);

        $query = "INSERT INTO products (name, description, price) VALUES ('$name', '$description', '$price')";

        if ($this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    //Delete a product
    public function deleteProduct($id)
    {
        $query = "DELETE FROM products WHERE id = $id";

        if ($this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    //Get a product
    public function getProduct($id)
    {
        $product = array();
        $query = $this->conn->query("SELECT * FROM products WHERE id = $id");

        while($row = $query->fetch_assoc()) {
            $product = $row;
        }

        return $product;
    }

    //Update a product
    public function updateProduct($post)
    {
        $name = $this->conn->real_escape_string($post['name']);
        $description = $this->conn->real_escape_string($post['description']);
        $price = $this->conn->real_escape_string($post['price']);
        $id = $this->conn->real_escape_string($post['id']);

        $query = "UPDATE products SET name = '$name', description = '$description', price = '$price' WHERE id = $id";

        if ($this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
}