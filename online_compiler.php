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
<?php include './includes/navbar-new.php'; ?>

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

if(isset($_GET['filename'])){
$fname = $_GET['filename'];
$result = mysqli_query($conn, "SELECT * FROM `user_files` WHERE `name` = '$fname'");
$row = mysqli_fetch_array($result);

}

?>


<div class="container place-content-center h-screen w-full p-1">

    <form action="./includes/compiler.php" method="post">

        <div class="hidden md:grid md:ml-6 mt-6 ml-1 mb-6 grid grid-rows-2 grid-col-1 md:grid-col-3 grid-flow-row md:grid-flow-col h-full w-full">

            <div class="grid grid-rows-2 grid-col-1 grid-flow-row program md:col-span-2 md:row-span-2 " style="overflow: auto;">
                <div class="row-span-3">
                    <textarea class="w-full h-8 m-1" type="text" style="background-color: #2E2E2E;border:none;" name="filename" id="filename" placeholder="Filename"><?php if (isset($row["name"])) {echo $row["name"];}else{if (isset($_SESSION['filename'])) { echo $_SESSION['filename']; };}?></textarea>

                    <textarea class="w-full h-[33rem] m-1" type="text" style="background-color: #2E2E2E;border:none;" name="scode" id="scode" placeholder="Program Code"><?php if (isset($row["source_code"])) { echo $row["source_code"];}else{if(isset($_SESSION['scode'])) { echo $_SESSION['scode'];}; }?></textarea>
                </div>
                <div class="flex flex-col md:flex-row place-content-end">
                    <input style="background-color: #193E46;border:none;" type="number" value="            <?php if (isset($row["extension"])) {
                echo $row["extension"];
            }  ?><?php if (isset($_SESSION['lang'])) {
                                                                                                    echo $_SESSION['lang'];
                                                                                                }; ?>" name="lang"><br>
                    <button name="submit" type="submit" class="text-black m-2 px-3 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg">Run</button>
                    <?php if (isset($_SESSION["userUid"])) { ?>
                        <button name="save" type="save" class="text-black m-2 px-3 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg">Save</button>
                        <button class="text-black m-2 px-3 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg">Share</button>
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

                if (isset($_GET["output"])) {
                    echo $_GET["output"];
                }
                ?>
            </div>



        </div>
    </form>
    <form action="./includes/compiler.php" method="post">
        <div class="md:hidden mt-6 mb-6 grid grid-col-1 grid-row-6 h-full grid-flow-row" style="overflow: hidden;">
            <div class="program row-span-4 w-full ">
            <textarea class="w-full h-8 m-1" type="text" style="background-color: #2E2E2E;border:none;" name="filename" id="filename" placeholder="Filename"><?php if (isset($row["name"])) {echo $row["name"];}else{if (isset($_SESSION['filename'])) { echo $_SESSION['filename']; };}?></textarea>

                <textarea class="w-full h-full" type="text" style="background-color: #2E2E2E;border:none;" name="scode" id="scode" placeholder="Program Code"><?php if (isset($row["source_code"])) { echo $row["source_code"];}else{if(isset($_SESSION['scode'])) { echo $_SESSION['scode'];}; }?></textarea>

            </div>
            <div style=" background-color: #2E2E2E;" class="row-span-1 flex flex-row place-content-end p-2">
                <input class="m-1 rounded-lg" style="background-color: #193E46;border:none;" type="number" name="lang"><br>
                <button class="text-black m-1 px-2 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg" type="submit" name="submit">Run</button>
                <?php if (isset($_SESSION["userUid"])) { ?>
                    <button class="text-black m-1 px-2 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg">Share</button>
                    <button name="save" type="save" class="text-black m-1 px-2 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg" type="save" name="save">Save</button>
                <?php } ?>
            </div>
            <div class="input row-span-2">
                <textarea style="background-color: #193E46;border:none;" name="stdin" id="stdin" placeholder="Input"></textarea>
            </div>
            <div class="output">
                <?php

                if (isset($_GET["output"])) {
                    echo $_GET["output"];
                }
                ?>
            </div>

        </div>
    </form>

</div>

</form>
<script src="./packages/src-min/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/one_dark");
    editor.session.setMode("ace/mode/python");
</script>

<?php include './includes/footer.php'; ?>