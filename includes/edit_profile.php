<?php 

if (isset($_POST["submit"])) {
  
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
  
  
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    $image = $_FILES['image']['name'];
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
    $target = "images/".basename($image);
    
    editUser($name,$conn,$fname,$gitlink,$lnlink,$description,$image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
  
  }else{
    header("location: ../signup.php");
  }


?>