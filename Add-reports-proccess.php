<?php
    require "./admin-protection/protection.php";
    require "./config/config.php";

    $protection = md5('semur');

    if(isset($_POST['year'])){
        $year = $_POST['year'];
        if(!empty($_FILES['file'])){
            $file = $_FILES['file'];
            $name = $file['name'];
            $pathFile = __DIR__.'/reports/'.$name;
            if(!move_uploaded_file($file['tmp_name'], $pathFile)){
                echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
            }
            $mysql -> query("INSERT INTO `reports` (`date`,`file`) VALUES ('$year','$name')");

            header('location: Add-reports.php?h='.$protection.'');
        }else{
            header('location: Add-reports.php?h='.$protection.'');
        }
    }else{
        header('location: Add-reports.php?h='.$protection.'');
    }