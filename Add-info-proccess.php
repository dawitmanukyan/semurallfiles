<?php 
    require "./admin-protection/protection.php";
    require "./config/config.php";

    if(isset($_POST['infoarm']) && isset($_POST['inforu']) && isset($_POST['infoeng'])){

        $infoarm = $_POST['infoarm'];
        $inforu = $_POST['inforu'];
        $infoeng = $_POST['infoeng'];

        $mysql -> query("INSERT INTO `aboutus` (`infoarm`,`inforu`,`infoeng`) VALUES ('$infoarm','$inforu','$infoeng')");

        header('location: Add-info.php?h='.$_GET['h'].'');
    }else {
        header('location: Add-info.php?h='.$_GET['h'].'');
    }
?>