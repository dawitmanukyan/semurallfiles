<?php 
  if(isset($_GET['h'])){
    if($_GET['h'] != md5('semur')){
      header('location: Admin.php');
    }
  }else {
    header('location: Admin.php');
  }
?>