<?php

namespace Controller;

use model\Product;
use Model\ProductModel;

class ProductControl
{
    public $productMD;

    function __construct()
    {
        $this->productMD = new ProductModel();
    }

    function index()
    {
        $products = $this->productMD->getAll();
        include 'View/list.php';
    }

    function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'View/add.php';
        } else {
            $name = $_POST['name'];
            $line = $_POST['line'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];
            $day = $_POST['day'];
            $description = $_POST['description'];
            $product = new Product($name, $line, $price, $amount, $day, $description);
            $this->productMD->add($product);
            header('Location: index.php');
        }
    }

    function update(){
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            //var_dump($id);
            $product = $this->productMD->get($id);
            //var_dump($product);
            include 'View/update.php';
        } else {
            $id = $_POST['id'];
            if (empty($errors)) {
                $name = $_POST['name'];
                $line = $_POST['line'];
                $price = $_POST['price'];
                $amount = $_POST['amount'];
                $day = $_POST['day'];
                $description = $_POST['description'];
                $product = new Product($name, $line, $price, $amount, $day, $description);
                $this->productMD->update($id,$product);
                header('Location: index.php');
            } else {
                $product = $this->productMD->get($id);
                include 'View/update.php';
            }
        }
    }

    function delete(){
        $id=$_GET['id'];
        $this->productMD->delete($id);
        header('Location: index.php');
    }

    function search(){
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $search=$_POST['search'];
            $products=$this->productMD->search($search);
            include 'View/list.php';
        }
    }
}