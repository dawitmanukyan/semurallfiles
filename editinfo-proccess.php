<?php
    require "./admin-protection/protection.php";
    require "./config/config.php";

    $protection = md5('semur');

    if(isset($_GET['id']) && isset($_POST['infoarm']) && isset($_POST['inforu']) && isset($_POST['infoeng'])){
            $id = $_GET['id'];
            $infoarm = $_POST['infoarm'];
            $inforu = $_POST['inforu'];
            $infoeng = $_POST['infoeng'];
            $mysql -> query("UPDATE `aboutus` SET `infoarm` = '$infoarm',`inforu` = '$inforu',`infoeng` = '$infoeng' WHERE `id` = '$id'");
            header('location: editinfo.php?h='.$protection.'');

        }
        else{
        header('location: editinfo.php?h='.$protection.'');
    }
