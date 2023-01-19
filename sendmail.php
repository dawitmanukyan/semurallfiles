<?php
    if(isset($_POST['phone']) && isset($_POST['username']) && isset($_POST['messsage']) && isset($_POST['useremail'])){
        $usname = $_POST['username'];
        $phone = $_POST['phone'];
        $message = $_POST['messsage'];
        $userEmail = $_POST['useremail'];
        $headers = 'From: '.$userEmail.'';

        mail("info@semur.am","User message","Name: ".$usname.", "."Phone: ".$phone.", Message :".$message."",$headers);
    
        header("location: index.php");
    }else {
        if(isset($_POST['phone']) && isset($_POST['username'])){
            $usname = $_POST['username'];
            $phone = $_POST['phone'];
    
            mail("info@semur.am","order a call","Name: ".$usname." "."Phone: ".$phone."");
    
            header("location: index.php");
        }else {
            header("location: index.php");
        }
    }
?>