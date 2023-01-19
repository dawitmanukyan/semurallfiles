<?php 
    require "./admin-protection/protection.php";
    require "./config/config.php";

    if(isset($_GET['id']) && isset($_GET['type']) && isset($_GET['file'])){
        $id = $_GET['id'];
        $type = $_GET['type'];
        $file = $_GET['file'];
        
        $mysql -> query("DELETE FROM `$type` WHERE `id`=$id");
        header('location: '.$file.'?h='.$_GET['h'].'');
    }else {
        header('location: Semur-admin-panel.php?h='.$_GET['h'].'');
    }

?>