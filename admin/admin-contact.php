<?php

require './header.php';
require './nav.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Messages</title>

</head>

<body>


    <!-- /Modal -->
    <section class="text-gray-400 bg-gray-900 body-font overflow-hidden">
        
        <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-white">Contact Us Messages</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><p>
            </div>
            <div class="-my-8 divide-y-2 divide-gray-800">
                <?php
                include '../includes/dbh.inc.php';
                $result = mysqli_query($conn, "SELECT * FROM `contact`");
                if (mysqli_num_rows($result) > 0) {
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                ?>


                        <div class="py-8 flex flex-wrap md:flex-nowrap">
                            <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                                <span class="font-semibold title-font text-white">Name : <?php echo $row['name'] ?></span>
                                <span class="mt-1 text-gray-500 text-sm">Time : <?php echo $row['time'] ?></span>
                            </div>
                            <div class="md:flex-grow">
                                <h2 class="text-2xl font-medium text-white title-font mb-2">Subject : <?php echo $row['subject'] ?></h2>
                                <p class="leading-relaxed">Message : <?php echo $row['message'] ?></p>
                                <div class="text-indigo-400 inline-flex items-center mt-4">
                                <?php if($row['status'] == 0)  { ?>
                                    <a href="./markasread.php?id=<?php echo $row['id']?>&type=read">
                                    <button type="button" name="read" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">Mark as Read</button>
                                    </a>

                                <?php }else{ ?>
                                <button type="button" class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md focus:outline-none focus:ring-0 transition duration-150 ease-in-out pointer-events-none opacity-60 mr-2" disabled >Marked As Read</button>
                                <a href="./markasread.php?id=<?php echo $row['id']?>&type=unread">
                                    <button type="button" name="unread" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">Mark as Unread</button>
                                    </a>
                                <?php } ?>
                            </div>
                            </div>
                        </div>

                    <?php
                        $i++;
                    }
                    ?>
                <?php
                } else {
                    echo "no records found";
                }
                ?>


            </div>
        </div>
    </section>
</body>

<?php
require './footer.php';
?>

</html>