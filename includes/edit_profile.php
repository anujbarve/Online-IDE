<?php 

if (isset($_POST["submit"])) {
  
    $fname = $_POST["fname"];
    $gitlink = $_POST["gitlink"];
    $lnlink = $_POST["lnlink"];
    $description = $_POST["description"];
    $image = $_FILES["image"]["name"];
  
  
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    $image = $_FILES['image']['name'];
    $image_text = mysqli_real_escape_string($conn, $_POST['image_text']);
    $target = "images/".basename($image);
    
    editUser($name,$conn,$fname,$gitlink,$lnlink,$description,$image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
  
  }else{
    header("location: ../user_dash.php");
  }


?>