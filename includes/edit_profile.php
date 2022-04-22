<?php 

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {
  
    $name = $_SESSION["userID"];
    $fname = $_POST["fname"];
    $gitlink = $_POST["gitlink"];
    $lnlink = $_POST["lnlink"];
    $description = $_POST["description"];

    $sql = "UPDATE users SET `linkedlink`='$lnlink',`githublink`='$gitlink',`fullname`='$fname',`description`='$description' WHERE `users`.`userID` = 11";

    mysqli_query($conn,$sql);

    header("location: ../user_dash.php?error=none");
    exit();
  
  }else{
    header("location: ../user_dash.php?error");
  }


?>
