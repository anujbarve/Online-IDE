<?php
include_once 'connection.php';
$sql = "DELETE FROM users WHERE userID='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
   header("location: index.php?message=user_delete");
   exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>