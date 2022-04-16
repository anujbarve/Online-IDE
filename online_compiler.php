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
<?php include './includes/navbar.php'; ?>

<style>

    textarea{
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

<form action="./includes/compiler.php" method="post">
<div class="container place-content-center h-screen w-full">
    <div class="mt-6 md:ml-6 mb-6 grid grid-rows-2 grid-col-1 md:grid-col-3 grid-flow-row md:grid-flow-col h-full w-full">
    


    <div class="grid grid-rows-2 grid-col-1 grid-flow-row program md:col-span-2 md:row-span-2 " style="overflow: auto;">
            <div class="row-span-3">
                <textarea style="background-color: #2E2E2E;border:none;" name="scode" id="scode" placeholder="Program Code"></textarea>
            </div>
            <div class="flex flex-col-reverse md:flex-row place-content-end">
            <input style="background-color: #193E46;border:none;" type="number" name="lang"><br>
                <button name="submit" type="submit"class="m-2 px-3 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg">Run</button>
                <button class="m-2 px-3 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg">Save</button>
                <button class="m-2 px-3 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg">Share</button>
            </div>

        </div>
        <div class="input">
        <textarea style="background-color: #193E46;border:none;" name="stdin" id="stdin" placeholder="Input"></textarea>
        </div>
        <div class="output" style="overflow: auto;">
            <?php
            
            if(isset($_GET["output"])){
                echo $_GET["output"];
            }
            ?>
        </div>

       

    </div>

</div>


</form>

<?php include './includes/footer.php'; ?>