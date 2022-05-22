<?php
include_once '../includes/dbh.inc.php';
$sql = "DELETE FROM user_posts WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
   header("location: ../user_feed.php?message=post_delete");
   exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>