<?php include './includes/header.php'; ?>
<?php include './includes/navbar.php'; ?>

<style>
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

<div class="container place-content-center h-screen w-full">

    <div class="mt-6 md:ml-6 mb-6 grid grid-rows-2 grid-col-1 md:grid-col-3 grid-flow-row md:grid-flow-col h-full w-full">
        <div class="grid grid-rows-2 grid-col-1 grid-flow-row program md:col-span-2 md:row-span-2 " style="overflow: auto;">
            <div class="row-span-3">
                Program Code
            </div>
            <div class="flex flex-col-reverse md:flex-row place-content-end">
                <button class="m-2 px-3 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg">Run</button>
                <button class="m-2 px-3 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg">Save</button>
                <button class="m-2 px-3 py-2 bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] hover:from-[#58E1FF] hover:to-[#7EFF7B] rounded-lg">Share</button>
            


            </div>

        </div>
        <div class="input">Input</div>
        <div class="output" style="overflow: auto;">

        </div>
    </div>

</div>


<?php include './includes/footer.php'; ?>