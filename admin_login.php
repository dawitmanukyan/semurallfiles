<?php
    require "./config/config.php";

    $hash = md5('semur');

    if(isset($_POST['username']) && isset($_POST['password'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $admin = $mysql -> query("SELECT * FROM `admin`");
        foreach($admin as $value);
        $mysql -> close();

        if($username == $value['username'] && $password == $value['password']){
            header('location: Semur-admin-panel.php?h='.$hash.'');
        }else {
            header('location: Admin.php');
        }
    }else{
        header('location: Admin.php');
    }

?>