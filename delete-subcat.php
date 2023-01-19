<?php 
    require "./admin-protection/protection.php";
    require "./config/config.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $mysql -> query("DELETE FROM `subcategories` WHERE `id`=$id");
        header('location: Subcategories.php?h='.$_GET['h'].'');

    }else {
        header('location: Subcategories.php?h='.$_GET['h'].'');
    }