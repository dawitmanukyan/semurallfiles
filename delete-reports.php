<?php 
    require "./admin-protection/protection.php";
    require "./config/config.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $mysql -> query("DELETE FROM `reports` WHERE `id`=$id");
        header('location: Reports.php?h='.$_GET['h'].'');

    }else {
        header('location: Reports.php?h='.$_GET['h'].'');
    }