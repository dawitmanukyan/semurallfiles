<?php 
    require "./admin-protection/protection.php";
    require "./config/config.php";

    $protection = md5('semur');

    if(isset($_POST['cat-name-arm']) && isset($_POST['cat-name-ru']) && isset($_POST['cat-name-eng']) && isset($_POST['infoarm'])
    && isset($_POST['inforu']) && isset($_POST['infoeng'])){
        $catarm = $_POST['cat-name-arm'];
        $catru = $_POST['cat-name-ru'];
        $cateng = $_POST['cat-name-eng'];
        $infoarm = $_POST['infoarm'];
        $inforu = $_POST['inforu'];
        $infoeng = $_POST['infoeng'];
        $date = date("m.d.y");
        if(!empty($_FILES['file']) && !empty($_FILES['file2']) && !empty($_FILES['file3']) && !empty($_FILES['file4']) && !empty($_FILES['file5'])){
        
            $file = $_FILES['file'];
            $file2 = $_FILES['file2'];
            $file3 = $_FILES['file3'];
            $file4 = $_FILES['file4'];
            $file5 = $_FILES['file5'];

            $name = $file['name'];
            $name2 = $file2['name'];
            $name3 = $file3['name'];
            $name4 = $file4['name'];
            $name5 = $file5['name'];


            $pathFile = __DIR__.'/img-blog/'.$name;
            if(!move_uploaded_file($file['tmp_name'], $pathFile)){
                echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
            }

            
            $pathFile2 = __DIR__.'/img-blog/'.$name2;
            if(!move_uploaded_file($file2['tmp_name'], $pathFile2)){
                echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
            }

            
            $pathFile3 = __DIR__.'/img-blog/'.$name3;
            if(!move_uploaded_file($file3['tmp_name'], $pathFile3)){
                echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
            }

            
            $pathFile4 = __DIR__.'/img-blog/'.$name4;
            if(!move_uploaded_file($file4['tmp_name'], $pathFile4)){
                echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
            }

            $pathFile5 = __DIR__.'/img-blog/'.$name5;
            if(!move_uploaded_file($file5['tmp_name'], $pathFile5)){
                echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
            }

            $mysql -> query("INSERT INTO `blogs`(`namearm`,`nameru`,`nameeng`,`img`,`descriptionarm`,`descriptionru`,`descriptioneng`,`date`,`img2`,`img3`,`img4`,`img5`)
            VALUES ('$catarm','$catru','$cateng','$name','$infoarm','$inforu','$infoeng','$date','$name2','$name3','$name4','$name5')");

            header('location: Add-blog.php?h='.$protection.'');
        }else{
            header('location: Add-blog.php?h='.$protection.'');

        }


    }else{
        header('location: Add-blog.php?h='.$protection.'');

    }