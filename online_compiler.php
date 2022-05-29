<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compiler online</title>
</head>
<body>
<form action="./includes/compiler.php" method="post">
Language Id: <input type="number" name="lang"><br>
Source Code: <textarea name="scode" id="" cols="30" rows="10"></textarea><br>
Input: <input type="text" name="stdin"><br>
<input type="submit">

</form>
</body>
</html> -->

<?php include './includes/header.php'; ?>
<style>
    textarea {
        width: 100%;
        height: 100%;
    }

    .container {
        box-sizing: border-box;
    }

    .program {
        background-color: #2E2E2E;
        padding: 10px;
        color: white;
        border-radius: 15px 0px 0px 15px;
    }

    .input {
        background-color: #193E46;
        padding: 10px;
        color: white;
        border-radius: 0px 15px 0px 0px;
    }

    .output {
        background-color: #1F1F1F;
        padding: 10px;
        color: white;
        border-radius: 0px 0px 15px 0px;
    }

    @media only screen and (max-width: 768px) {
        .program {
            border-radius: 15px 15px 0px 0px;
        }

        .input {
            border-radius: 0px 0px 0px 0px;
        }

        .output {
            border-radius: 0px 0px 15px 15px;
        }
    }
</style>

<?php

require './includes/dbh.inc.php';

if (isset($_GET['file'])) {
    $_SESSION['scode'] = "";
    $_SESSION['filename'] = "";
    $_SESSION['input'] = "";
    $_SESSION["final_output"] = "";
    $_SESSION['fname'] = "";
} else {
    if (isset($_GET['filename'])) {
        $fname = $_GET['filename'];
        $result = mysqli_query($conn, "SELECT * FROM `user_files` WHERE `name` = '$fname'");
        $row = mysqli_fetch_array($result);
        $status = 1;
    } elseif (isset($_SESSION['fname'])) {
        $fname = $_SESSION['fname'];
        $result = mysqli_query($conn, "SELECT * FROM `user_files` WHERE `name` = '$fname'");
        $row = mysqli_fetch_array($result);
        $status = 1;
    }
}
?>
    <!-- MODAL  -->

    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalLg" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLgLabel">
                        Share Program as Post
                    </h5>
                    <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body relative p-4">
                    <form action="./includes/new_post.php" method="post" enctype="multipart/form-data">
                        <div class="flex flex-row items-center justify-center lg:justify-start">
                        </div>
                        <div class="mb-6">
                            <select name='fname' class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                                <option value=""> Select File</option>
                                <?php
                                include './includes/dbh.inc.php';
                                ?>
                                <?php
                                $uname = $_SESSION["userUid"];
                                $list = mysqli_query($conn, "SELECT * FROM `user_files` WHERE `user_name` = '$uname';");
                                while ($row_list = mysqli_fetch_assoc($list)) {
                                ?>

                                    <option value="<?php echo $row_list['name']; ?>">

                                        <?php echo $row_list['name']; ?>

                                    </option>

                                <?php

                                }

                                ?>

                            </select>
                        </div>

                        <div class="mb-6">
                            <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" name="username" value="<?php if (isset($_SESSION["userUid"])) {
                                                                                                                                                                                                                                                                                                                                                                    echo $_SESSION["userUid"];
                                                                                                                                                                                                                                                                                                                                                                } ?>" placeholder="Username" />
                        </div>


                        <div class="mb-6">
                            <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" name="title" placeholder="Title" />
                        </div>
                        <div class="mb-6">
                            <select name="lang" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                                <option selected value="python">Python</option>
                                <option value="java">Java</option>
                                <option value="c">C</option>
                                <option value="cpp">C++</option>
                                <option value="js">Javascript</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <textarea type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" name="description" placeholder="Description"></textarea>
                        </div>

                        <div class="text-center">
                            <button name="submit" type="submit" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                POST
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /MODAL -->
<body>
    
<!-- navbar -->

<?php include './includes/navbar-new.php'; ?>

<!-- /navbar -->

<!-- online compiler -->


<div class="container place-content-center w-full p-1">


    <form action="./includes/compiler.php" method="post">

        <div class="hidden md:grid md:ml-6 mt-6 ml-1 mb-6 grid grid-rows-2 grid-col-1 md:grid-col-3 grid-flow-row md:grid-flow-col h-full w-full">

            <div class="grid grid-rows-2 grid-col-1 grid-flow-row program md:col-span-2 md:row-span-2 " style="overflow: auto;">
                <div class="row-span-3">
                    <textarea class="w-full h-8 m-1" type="text" style="background-color: #2E2E2E;border:none;" name="filename" id="filename" placeholder="Filename"><?php if (isset($row["name"])) {
                                                                                                                                                                            echo $row["name"];
                                                                                                                                                                        } else if (isset($_SESSION["filename"])) {
                                                                                                                                                                            echo $_SESSION["filename"];
                                                                                                                                                                        }
                                                                                                                                                                        ?></textarea>

                    <textarea class="w-full h-[33rem] m-1" type="text" style="background-color: #2E2E2E;border:none;" name="scode" id="scode" placeholder="Program Code"><?php if (isset($row["source_code"])) {
                                                                                                                                                                                echo $row["source_code"];
                                                                                                                                                                            } else if (isset($_SESSION["scode"])) {
                                                                                                                                                                                echo $_SESSION["scode"];
                                                                                                                                                                            }
                                                                                                                                                                            ?></textarea>
                </div>
                <div class="flex flex-col md:flex-row place-content-end">

                    <select name="lang" class="form-select appearance-none
      block
      w-32
      px-3
      py-1.5
      text-base
      font-normal
      text-white
      bg-[#193E46] bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
focus:text-white focus:bg-[#193E46] focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        <?php

                        function extension($var)
                        {
                            if ($var == "71") {
                                return "Python";
                            } elseif ($var == "62") {
                                return "Java";
                            } elseif ($var == "50") {
                                return "C";
                            } elseif ($var == "54") {
                                return "C++";
                            } elseif ($var == "63") {
                                return "Javascript";
                            } else {
                                return "None";
                            }
                        }


                        if (isset($row["extension"])) {

                            $extension = $row["extension"];

                            $varname = extension($extension);
                            echo "<option selected value='$extension'>$varname</option>";
                        } else {
                            echo "<option selected value='71'>Python</option>";
                        } ?>
                        <option value="62">Java</option>
                        <option value="50">C</option>
                        <option value="54">C++</option>
                        <option value="63">Javascript</option>
                    </select>

                    <button name="submit" type="submit" class="text-black m-2 px-3 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg">Run</button>
                    <?php if (isset($_SESSION["userUid"])) { ?>
                        <?php if ($_SESSION['filename'] != "" && $_SESSION['fname'] != "") { ?>
                            <button name="update" type="update" class="text-black m-2 px-3 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg">Update</button>
                        <?php } else { ?>
                            <button name="save" type="save" class="text-black m-2 px-3 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg">Save</button>
                        <?php } ?>
                        <div name="share" type="share" class="text-black m-2 px-3 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Share</div>
                    <?php } ?>
                </div>

            </div>
            <div class="input">
                <textarea style="background-color: #193E46;border:none;" name="stdin" id="stdin" placeholder="Input"><?php if (isset($_SESSION['input'])) {
                                                                                                                            echo $_SESSION['input'];
                                                                                                                        }; ?></textarea>
            </div>
            <div class="output h-128" style="overflow: auto;">
                <?php

                if (isset($_SESSION["final_output"])) {
                    echo $_SESSION["final_output"];
                }
                ?>
            </div>



        </div>
    </form>
    <form action="./includes/compiler.php" method="post">
        <div class="md:hidden mt-6 mb-6 grid grid-col-1 grid-row-6 h-full grid-flow-row" style="overflow: hidden;">
            <div class="program row-span-4 w-full ">
                <textarea class="w-full h-8 m-1" type="text" style="background-color: #2E2E2E;border:none;" name="filename" id="filename" placeholder="Filename"><?php if (isset($row["name"])) {
                                                                                                                                                                        echo $row["name"];
                                                                                                                                                                    } else if (isset($_SESSION["filename"])) {
                                                                                                                                                                        echo $_SESSION["filename"];
                                                                                                                                                                    }

                                                                                                                                                                    ?></textarea>

                <textarea class="w-full h-full" type="text" style="background-color: #2E2E2E;border:none;" name="scode" id="scode" placeholder="Program Code"><?php if (isset($row["source_code"])) {
                                                                                                                                                                    echo $row["source_code"];
                                                                                                                                                                } else if (isset($_SESSION["scode"])) {
                                                                                                                                                                    echo $_SESSION["scode"];
                                                                                                                                                                }

                                                                                                                                                                ?></textarea>

            </div>
            <div style=" background-color: #2E2E2E;" class="row-span-1 flex flex-row place-content-end p-2">
                <select name="lang" class="form-select appearance-none
      block
      w-32
      px-3
      py-1.5
      text-base
      font-normal
      text-white
      bg-[#193E46] bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-white focus:bg-[#193E46] focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                    <?php
                    if (isset($row["extension"])) {

                        $extension = $row["extension"];

                        $varname = extension($extension);
                        echo "<option selected value='$extension'>$varname</option>";
                    } else {
                        echo "<option selected value='71'>Python</option>";
                    } ?>

                    <option value="62">Java</option>
                    <option value="50">C</option>
                    <option value="54">C++</option>
                    <option value="63">Javascript</option>
                </select>
                <button class="text-black m-1 px-2 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg" type="submit" name="submit">Run</button>
                <?php if (isset($_SESSION["userUid"])) { ?>
                    <?php if (isset($_GET['filename']) || isset($_SESSION['filename'])) { ?>
                        <button name="update" type="update" class="text-black m-2 px-3 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg">Update</button>
                    <?php } else { ?>
                        <button name="save" type="save" class="text-black m-2 px-3 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg">Save</button>
                    <?php } ?>
                    <div class="text-black m-2 px-3 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Share</div>
                <?php } ?>
            </div>
            <div class="input row-span-2">
                <textarea style="background-color: #193E46;border:none;" name="stdin" id="stdin" placeholder="Input"></textarea>
            </div>
            <div class="output">
                <?php

                if (isset($_SESSION["final_output"])) {
                    echo $_SESSION["final_output"];
                } else {
                    echo "Output";
                }
                ?>
            </div>

        </div>
    </form>

</div>

<!-- /online compiler -->

</body>
<?php include './includes/footer.php'; ?>
</html>

<script>
<?php

include './includes/toast.php';

if(isset($_GET['message'])){
$message = $_GET['message'];

toast_compiler_page($message);
}

?>  
</script>
