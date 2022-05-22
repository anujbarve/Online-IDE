<?php

require './header.php';
require './nav.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Retrieve Or Fetch Data From MySQL Database Using PHP With Boostrap</title>

    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

</head>

<body>


    <section class="h-full text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Registered Users</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><p>
            </div>
            <div class="flex flex-wrap -m-2">


                <?php
                include_once 'connection.php';
                $result = mysqli_query($conn, "SELECT * FROM users");
                ?>

                <?php
                if (mysqli_num_rows($result) > 0) {
                ?>
                                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                    ?>

                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-800 border p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="<?php if (isset($row["user_photo"])) {
                                                          echo "../user-data/profile-photos/" . $row["user_photo"];
                                                        } else {
                                                          echo "https://angularjs-template.herokuapp.com/sing-app/dist/demo/img/people/a5.jpg";
                                                        } ?>">
                            <div class="flex-grow">
<a href="view_user.php?id=<?php echo $row["userID"]; ?>&Uid=<?php echo $row["userUid"]; ?>">
<h2 class="text-white title-font font-medium"><?php echo $row["userName"]; ?></h2>
</a>

                            </div>
                            <div class="flex-grow">
                            <a href="update.php?id=<?php echo $row["userID"]; ?>" title='Update Record'><p>Update</p></a>
                            <a href="delete.php?id=<?php echo $row["userID"]; ?>" title='Delete Record'><p>Delete</p></a>

                            </div>
                        </div>
                    </div>

                    <?php
                        $i++;
                    }
                    ?>
            <?php
                } else {
                    echo "No result found";
                }
            ?>

            </div>
        </div>
    </section>
    <script>
    <?php 
    
    if(isset($_GET['message'])){
        $message = $_GET['message'];
        if($message == "user_deleted"){
            echo 'tata.info("Info Message","User Deleted",{
                position: "br",
                duration: 5000
            })';
        }else if($message = "login_success"){
            echo 'tata.success("Success Message","Login Successful",{
                position: "br",
                duration: 5000
            })';
        }

    }
    ?>
    </script>
</body>
<?php
require '../includes/footer.php';

?>
</html>