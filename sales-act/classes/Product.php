<?php

require 'Database.php';

class Product extends Database {


    public function getAllProducts(){

        $sql = "SELECT id, product_name, price, quantity FROM products";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die('Error retrieving all products:' . $this->conn->error);
        }
    }

    public function getProduct($product_id){
        $id  =  $product_id;

        $sql = "SELECT * FROM products WHERE id = $id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die('Error retrieving the product:' . $this->conn->error);
        }
    }

    public function storeProduct($request){

        $id           = $request['id'];
        $product_name = $request['product_name'];
        $price        = $request['price'];
        $quantity     = $request['quantity'];
    
        $sql = "INSERT INTO products (product_name, price, quantity)
                VALUES ('$product_name', '$price', '$quantity')";
               
        if($this->conn->query($sql)){
            header('location: ../views/dashboard.php');
            exit;
        } else {
            die('Error creating the user:' . $this->conn->error);
        }

    }

    public function updateProduct($request){
        $id           = $request['product_id'];
        $product_name = $request['product_name'];
        $price        = $request['price'];
        $quantity     = $request['quantity'];

        $sql = "UPDATE products SET product_name = '$product_name', price = '$price', quantity = '$quantity' WHERE id = '$id' ";

        if($this->conn->query($sql)){
            header('location: ../views/dashboard.php?message=updated_successfully');
            exit;
        }
        else{
            die('Error updating the product:' . $this->conn->error);
        }
    }


    public function deleteProduct(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productName= $_POST['product_name'];
                
            $sql = "DELETE FROM products WHERE product_name = '$productName'";

            if ($result = $this->conn->query($sql)) {
                header('Location: ../views/dashboard.php?message=deleted_successfully');
            } else {
                echo 'Failed to delete product.';
            }
        }

    }




}

?>