<?php
include_once 'connection.php';

$id = $_GET['id'];

if($_GET['type'] == 'read'){
$sql = "UPDATE `contact` SET `status` = '1' WHERE `contact`.`id` = $id;";
if (mysqli_query($conn, $sql)) {
   header("location: ./admin-contact.php?message=mark_as_read_success");
   exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
}elseif($_GET['type'] == 'unread'){
$sql = "UPDATE `contact` SET `status` = '0' WHERE `contact`.`id` = $id;";
if (mysqli_query($conn, $sql)) {
   header("location: ./admin-contact.php?message=mark_as_unread_success");
   exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
}

?>