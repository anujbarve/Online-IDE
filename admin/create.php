<?php
require '../includes/header.php';
require_once "connection.php";

if(isset($_POST['save']))
{    

     $name = $_POST['name'];
     $extension = $_POST['extension'];
     $username = $_SESSION['userUid'];
     $source_code = mysqli_real_escape_string($conn,$_POST['source_code']);
     $sql = "INSERT INTO user_files (name,extension,source_code,user_name)
     VALUES ('$name','$extension','$source_code','$username')";
     if (mysqli_query($conn, $sql)) {
        header("location: index.php");
        exit();
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <?php include "head.php"; ?>
</head>
<body>
 
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value=""  required="">
                        </div>
                        <div class="form-group ">
                            <label>Extension</label>
                            <input type="text" name="extension" class="form-control" value="" required="">
                        </div>
                        <div class="form-group">
                        <label>Source Code</label>
                            <textarea type="text" name="source_code" class="form-control" value="" required=""></textarea>
                        </div>

                        <input type="submit" class="btn btn-primary" name="save" value="submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>

            </div> 
               
        </div>

</body>
</html>
