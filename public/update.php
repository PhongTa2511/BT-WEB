<?php
    require_once '../config/database.php';
    require_once '../controllers/productController.php';
    header("Location: update.php");
    $a = false;
    $db = DatabaseConfig::getConnection();
    
    $productController = new productController($db);

    


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $productController->update($id);
        header("Location: index.php");
    }
    
?>