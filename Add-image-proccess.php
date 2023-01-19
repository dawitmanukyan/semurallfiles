<?php
    require "./admin-protection/protection.php";
    require "./config/config.php";

    $protection = md5('semur');
    
    if(!empty($_FILES['file'])){
        $file = $_FILES['file'];
        $name = $file['name'];
        $pathFile = __DIR__.'/img/'.$name;
        if(!move_uploaded_file($file['tmp_name'], $pathFile)){
            echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
        }
        $mysql -> query("INSERT INTO `gallery` (`img`) VALUES ('$name')");
        header('location: Add-image.php?h='.$protection.'');
    }else{
        header('location: Add-image.php?h='.$protection.'');
    }


?>  