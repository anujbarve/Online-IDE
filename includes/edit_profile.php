<?php 

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {
  
    $id = $_POST["userID"];
    $fname = $_POST["fname"];
    $gitlink = $_POST["gitlink"];
    $lnlink = $_POST["lnlink"];
    $description = $_POST["description"];

    $sql = "UPDATE users SET `user_ln`='$lnlink',`user_gh`='$gitlink',`userName`='$fname',`user_desc`='$description' WHERE `users`.`userID` = $id";

    mysqli_query($conn,$sql);

    header("location: ../user_dash.php?error=none");
    exit();
  
  }else{
    header("location: ../user_dash.php?error");
  }


?>
