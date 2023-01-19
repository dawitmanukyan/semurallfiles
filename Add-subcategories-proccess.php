<?php
    require "./admin-protection/protection.php";
    require "./config/config.php";

    $protection = md5('semur');

    if(isset($_POST['subcat-name-arm']) && isset($_POST['subcat-name-ru']) && isset($_POST['subcat-name-eng']) && isset($_POST['cat-id'])){
        $subcat_arm = $_POST['subcat-name-arm'];
        $subcat_ru = $_POST['subcat-name-ru'];
        $subcat_eng = $_POST['subcat-name-eng'];
        $incat = $_POST['cat-id'];

        if(!empty($_FILES['file'])){
            $file = $_FILES['file'];
            $name = $file['name'];
            $pathFile = __DIR__.'/img-subcategories/'.$name;
            if(!move_uploaded_file($file['tmp_name'], $pathFile)){
                echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
            }
            $catid = random_int(1000000,9999999);
            $mysql -> query("INSERT INTO `subcategories` (`type-arm`,`type-ru`,`type-eng`,`img`,`category_id`,`incategory`) VALUES ('$subcat_arm','$subcat_ru','$subcat_eng','$name',$catid,$incat)");

            header('location: Add-subcategories.php?h='.$protection.'');
        }else{
            header('location: Add-subcategories.php?h='.$protection.'');
        }

    }else{
        header('location: Add-subcategories.php?h='.$protection.'');
    }