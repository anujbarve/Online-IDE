<?php include './includes/header.php';?>
<?php include './includes/navbar.php';?>

<style>

.program{
    background-color: #2E2E2E;
    padding: 10px;
    color: white;
    border-radius: 15px 0px 0px 15px;
}

.input{
    background-color: #193E46;
    padding: 10px;
    color: white;
    border-radius: 0px 15px 0px 0px;
}

.output{
    background-color: #1F1F1F;
    padding: 10px;
    color: white;
    border-radius: 0px 0px 15px 0px;
}

</style>

<div class="container place-content-center h-screen w-screen">

<div class="mt-6 ml-6 mb-6 grid grid-rows-2 grid-col-3 grid-flow-col h-full w-full">
    <div class="program col-span-2 row-span-2">Program Code</div>
    <div class="input">Input</div>
    <div class="output">Output</div>
</div>

</div>


<?php include './includes/footer.php';?>