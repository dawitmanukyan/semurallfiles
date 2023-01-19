<?php 
    require "./admin-protection/protection.php";
    require "./config/config.php";

    $protection = md5('semur');

    if(isset($_POST['cat-name-arm']) && isset($_POST['cat-name-ru']) && isset($_POST['cat-name-eng']) && isset($_POST['hastutyun']) 
    && isset($_POST['laynutyun']) && isset($_POST['ogt_laynutyun']) && isset($_POST['erkarutyun']) && isset($_POST['infoarm']) 
    && isset($_POST['infoarm']) && isset($_POST['inforu']) && isset($_POST['infoeng']) && isset($_POST['cat-id']) && isset($_POST['colored'])){
            $cat_name_arm = $_POST['cat-name-arm'];
            $cat_name_ru = $_POST['cat-name-ru'];
            $cat_name_eng = $_POST['cat-name-eng'];
            $hastutyun = $_POST['hastutyun'];
            $laynutyun = $_POST['laynutyun'];
            $ogt_laynutyun = $_POST['ogt_laynutyun'];
            $erkarutyun = $_POST['erkarutyun'];
            $infoarm = $_POST['infoarm'];
            $inforu = $_POST['inforu'];
            $infoeng = $_POST['infoeng'];
            $catid = $_POST['cat-id'];
            $colored = $_POST['colored'];
            $inhomepage = $_POST['homepageitem'];
            if(!empty($_FILES['file1']) && !empty($_FILES['file2']) && !empty($_FILES['file3']) && !empty($_FILES['file4'])){

                $file1 = $_FILES['file1'];
                $file2 = $_FILES['file2'];
                $file3 = $_FILES['file3'];
                $file4 = $_FILES['file4'];
                $file5 = $_FILES['file5'];
                $file6 = $_FILES['file6'];
                $file7 = $_FILES['file7'];
                $file8 = $_FILES['file8'];
                $file9 = $_FILES['file9'];
                $file10 = $_FILES['file10'];
                $file11 = $_FILES['file11'];
                $file12 = $_FILES['file12'];
                $file13 = $_FILES['file13'];
                $file14 = $_FILES['file14'];
                $file15 = $_FILES['file15'];

                $name1 = $file1['name'];
                $name2 = $file2['name'];
                $name3 = $file3['name'];
                $name4 = $file4['name'];
                $name5 = $file5['name'];
                $name6 = $file6['name'];
                $name7 = $file7['name'];
                $name8 = $file8['name'];
                $name9 = $file9['name'];
                $name10 = $file10['name'];
                $name11 = $file11['name'];
                $name12 = $file12['name'];
                $name13 = $file13['name'];
                $name14 = $file14['name'];
                $name15 = $file15['name'];

                $pathFile1 = __DIR__.'/img-items/'.$name1;
                $pathFile2 = __DIR__.'/img-items/'.$name2;
                $pathFile3 = __DIR__.'/img-items/'.$name3;
                $pathFile4 = __DIR__.'/img-items/'.$name4;
                $pathFile5 = __DIR__.'/img-items/'.$name5;
                $pathFile6 = __DIR__.'/img-items/'.$name6;
                $pathFile7 = __DIR__.'/img-items/'.$name7;
                $pathFile8 = __DIR__.'/img-items/'.$name8;
                $pathFile9 = __DIR__.'/img-items/'.$name9;
                $pathFile10 = __DIR__.'/img-items/'.$name10;
                $pathFile11 = __DIR__.'/img-items/'.$name11;
                $pathFile12 = __DIR__.'/img-items/'.$name12;
                $pathFile13 = __DIR__.'/img-items/'.$name13;
                $pathFile14 = __DIR__.'/img-items/'.$name14;
                $pathFile15 = __DIR__.'/img-items/'.$name15;

                if(!move_uploaded_file($file1['tmp_name'], $pathFile1)){
                    echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
                }
                if(!move_uploaded_file($file2['tmp_name'], $pathFile2)){
                    echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
                }
                if(!move_uploaded_file($file3['tmp_name'], $pathFile3)){
                    echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
                }
                if(!move_uploaded_file($file4['tmp_name'], $pathFile4)){
                    echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
                }
                if(!move_uploaded_file($file5['tmp_name'], $pathFile5)){
                    echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
                }
                if(!move_uploaded_file($file6['tmp_name'], $pathFile6)){
                    echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
                }
                if(!move_uploaded_file($file7['tmp_name'], $pathFile7)){
                    echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
                }
                if(!move_uploaded_file($file8['tmp_name'], $pathFile8)){
                    echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
                }
                if(!move_uploaded_file($file9['tmp_name'], $pathFile9)){
                    echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
                }
                if(!move_uploaded_file($file10['tmp_name'], $pathFile10)){
                    echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
                }
                if(!move_uploaded_file($file11['tmp_name'], $pathFile11)){
                    echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
                }
                if(!move_uploaded_file($file12['tmp_name'], $pathFile12)){
                    echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
                }
                if(!move_uploaded_file($file13['tmp_name'], $pathFile13)){
                    echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
                }
                if(!move_uploaded_file($file14['tmp_name'], $pathFile14)){
                    echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
                }
                if(!move_uploaded_file($file15['tmp_name'], $pathFile15)){
                    echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
                }


                    $mysql -> query("INSERT INTO `items` (`namearm`,`nameru`,`nameeng`,`ownimage`,`image2`,
                    `image3`,`image4`,`descriptionarm`,`descriptionru`,`descriptioneng`,`thickness`,
                    `width`,`useful_width`,`length`,`incategory`,`colored`,`inhomepage`,`image5`
                    ,`image6`,`image7`,`image8`,`image9`,`image10`,`image11`,`image12`,`image13`,`image14`
                    ,`image15`) VALUES ('$cat_name_arm','$cat_name_ru','$cat_name_eng',
                    '$name1','$name2','$name3','$name4','$infoarm','$inforu','$infoeng',
                    '$hastutyun','$laynutyun','$ogt_laynutyun','$erkarutyun','$catid','$colored','$inhomepage','$name5','$name6','$name7','$name8','$name9','$name10','$name11','$name12','$name13','$name14','$name15')");


                    header('location: Add-item.php?h='.$protection.'');
            }else{
                header('location: Add-item.php?h='.$protection.'');
            }
    }else{
        header('location: Add-item.php?h='.$protection.'');
    }