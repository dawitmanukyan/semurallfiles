<?php
    require "./admin-protection/protection.php";
    require "./config/config.php";

    $protection = md5('semur');

    if(isset($_POST['cat-name-arm']) && isset($_POST['cat-name-ru']) && isset($_POST['cat-name-eng'])){
        $cat_name_arm = $_POST['cat-name-arm'];
        $cat_name_ru = $_POST['cat-name-ru'];
        $cat_name_eng = $_POST['cat-name-eng'];

        if(!empty($_FILES['file'])){    
            $file = $_FILES['file'];
            $name = $file['name'];
            $pathFile = __DIR__.'/img-categories/'.$name;
            if(!move_uploaded_file($file['tmp_name'], $pathFile)){
                echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
            }
            $categ = random_int(1000000,9999999);
            $mysql -> query("INSERT INTO `assortment` (`type-arm`,`type-ru`,`type-eng`,`img`,`category_id`) VALUES ('$cat_name_arm','$cat_name_ru','$cat_name_eng','$name',$categ)");

            header('location: Add-categories.php?h='.$protection.'');
        }else{
            header('location: Add-categories.php?h='.$protection.'');
        }

    }else{
        header('location: Add-categories.php?h='.$protection.'');
    }
