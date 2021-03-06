<?php include './includes/header.php'; ?>

<?php include './includes/navbar-new.php'; ?>


<?php

include './includes/dbh.inc.php';
$id = $_SESSION["userID"];
$result = mysqli_query($conn, "SELECT * FROM `users` WHERE `userID` = $id;");
$row = mysqli_fetch_array($result);

?>


<body>
<div>


<div class="">

    <section >
        <div class="md:m-5 px-6 text-gray-800">
            <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap g-6">
                <div class="flex justify-center grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0">
                    <img src="<?php if (isset($row["user_photo"])) {
                                    echo "./user-data/profile-photos/" . $row["user_photo"];
                                } else {
                                    echo "https://angularjs-template.herokuapp.com/sing-app/dist/demo/img/people/a5.jpg";
                                } ?>" class="md:w-96 w-64 md:mt-0 mt-16 rounded-full w-full" alt="Sample image" />
                </div>
                <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                    <form action="./includes/edit_profile.php" method="post" enctype="multipart/form-data">
                        <div class="flex flex-row items-center justify-center lg:justify-start">
                        </div>

                        <div class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5">
                            <p class="text-center font-semibold mx-4 mb-0">Edit Profile</p>
                        </div>

                        <!-- Email input -->

                        <div class="mb-6">
                            <input type="text" class="hidden form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" name="userID" value="<?php if (isset($_SESSION["userID"])) {
                                                                                                                                                                                                                                                                                                                                                                        echo $_SESSION["userID"];
                                                                                                                                                                                                                                                                                                                                                                    } ?>" placeholder="Username" />
                        </div>


                        <div class="mb-6">
                            <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" name="fname" value="<?php if (isset($row["userName"])) {
                                                                                                                                                                                                                                                                                                                                                                echo $row["userName"];
                                                                                                                                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                                                                                                                                echo "";
                                                                                                                                                                                                                                                                                                                                                            } ?>" placeholder="Full Name" />
                        </div>

                        <div class="mb-6">
                            <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" name="lnlink" value="<?php if (isset($row["user_ln"])) {
                                                                                                                                                                                                                                                                                                                                                                echo $row["user_ln"];
                                                                                                                                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                                                                                                                                echo "";
                                                                                                                                                                                                                                                                                                                                                            } ?>" placeholder="LinkedIn Link" />
                        </div>

                        <div class="mb-6">
                            <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" name="gitlink" value="<?php if (isset($row["user_ln"])) {
                                                                                                                                                                                                                                                                                                                                                                    echo $row["user_gh"];
                                                                                                                                                                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                                                                                                                                                                    echo "";
                                                                                                                                                                                                                                                                                                                                                                } ?>" placeholder="Github Link" />
                        </div>
                        <div class="mb-6">
                            <textarea type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" name="description" placeholder="Description" ><?php if (isset($row["user_desc"])) {
                                                                                                                                                                                                                                                                                                                                                                        echo $row["user_desc"];
                                                                                                                                                                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                                                                                                                                                                        echo "";
                                                                                                                                                                                                                                                                                                                                                                    } ?></textarea>
                        </div>

                        <div class="mb-6">
                            <label for="formFile" class="form-label inline-block mb-2 text-gray-700">Profile Photo</label>
                            <input class="form-control
    block
    w-full
    px-3
    py-1.5
    text-base
    font-normal
    text-gray-700
    bg-white bg-clip-padding
    border border-solid border-gray-300
    rounded
    transition
    ease-in-out
    m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" name="image" id="formFile">
                        </div>

                        <div class="text-center">
                            <button name="submit" type="submit" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                Edit Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


</div>


</div>
    
</body>
<?php include './footer.php' ?>
</html>