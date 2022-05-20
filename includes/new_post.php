<?php 

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

$sql = "INSERT INTO `user_posts`(`title`, `username`, `description`, `scode`) VALUES ('[value,'[value-2]','[value-3]','[value-4]','[value-5]')";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../admin/register.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ssss",$username,$hashedPwd,$email,$security_code);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../admin/login.php");
    exit();

?>