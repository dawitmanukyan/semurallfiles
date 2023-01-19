<?php 
    require "./admin-protection/protection.php";
    require "./config/config.php";
    if(isset($_POST['hinfoarm1'])&&isset($_POST['hinfoarm2'])&&isset($_POST['hinforu1'])&&isset($_POST['hinforu2'])&&isset($_POST['hinfoeng1'])&&isset($_POST['hinfoeng1'])){
        $harm1 = $_POST['hinfoarm1'];
        $harm2 = $_POST['hinfoarm2'];
        $hru1 = $_POST['hinforu1'];
        $hru2 = $_POST['hinforu2'];
        $heng1 = $_POST['hinfoeng1'];
        $heng2 = $_POST['hinfoeng2'];
        $mysql -> query("INSERT INTO `home_info` (`infoarm`,`inforu`,`infoeng`,`titlearm`,`titleru`,`titleeng`) VALUES ('$harm2','$harm1','$hru2','$hru1','$heng2','$heng1')");
        header('location: Add-info.php?h='.$_GET['h'].'');
    }else {
        header('location: Add-info.php?h='.$_GET['h'].'');
    }
?>