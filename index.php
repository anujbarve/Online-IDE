<!DOCTYPE html>
<html lang="en">

<?php include './includes/header.php'?>

<body class="bg-black lg:bg-white">
    <!--               *****************   HERO SECTION  **************************  -->

<?php
if (isset($_SESSION["userUid"])) {
?>
<?php
include_once './includes/navbar-new.php';
?>
<section class="hero border-b-2 ">
        <div class="px-4 py-2 grid grid-cols-2">

        </div>
        <div class=" h-screen  grid grid-cols-1 md:grid-cols-3">
            <div class="grid px-4 py-2 content-start justify-items-right ">
                <div class="title1 leading-10 text-center md:text-left text-white lg:text-black text-4xl md:text-6xl py-10 font-black tracking-normal ">
                    Most <br />
                    Powerful<br />
                    Online <br />
                    IDE<br />
                </div>
            </div>
            <div class="grid  sm:bg-black md:bg-transparent  content-center justify-items-center ">
                <div
                    class="title2 leading-10 py-2  text-4xl md:text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] ">
                    Scryptn
                </div>
                <div class="text-lg leading-10  text-white">
                    <span>Code with ease</span>
                </div>
            </div>
            <div class="grid px-4 py-2 content-center  md:content-end justify-items-center md:justify-items-end">
                <div class="title1 text-white lg:text-black text-4xl md:text-5xl py-10 font-black tracking-normal ">
                    Now, You can <br />
                    Code without a<br />
                    PC ;) <br />
                </div>
            </div>
        </div>
    </section>
<?php
}else{
?>
<section class="hero border-b-2 ">
        <div class="px-4 py-2 grid grid-cols-2">
            <div class="flex flex-row justify-items-start font-extrabold text-[#888888] hover:text-[#000000]">
                <div class="flex ">
                    <svg width="31" height="20" viewBox="0 0 41 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M40.092 13.0607C40.6778 12.4749 40.6778 11.5251 40.092 10.9393L30.5461 1.3934C29.9603 0.807611 29.0105 0.807611 28.4247 1.3934C27.839 1.97919 27.839 2.92893 28.4247 3.51472L36.91 12L28.4247 20.4853C27.839 21.0711 27.839 22.0208 28.4247 22.6066C29.0105 23.1924 29.9603 23.1924 30.5461 22.6066L40.092 13.0607ZM0 13.5H39.0313V10.5H0V13.5Z" fill="black"/>
                    </svg>
                </div>
                <div class="flex px-2 text-white md:text-[#888888] ">
                    <a href="online_compiler.php">Jump to Compiler</a>
                </div>
            </div>
            <div class="grid justify-items-end text-white underline underline-offset-8  decoration-1 hover:text-[#6BF0BD]">
                <a href="signup.php">Sign In/Sign Up</a>
            </div>
        </div>
        <div class=" h-screen  grid grid-cols-1 md:grid-cols-3">
            <div class="grid px-4 py-2 content-start justify-items-right ">
                <div class="title1 leading-10 text-center md:text-left text-white lg:text-black text-4xl md:text-6xl py-10 font-black tracking-normal ">
                    Most <br />
                    Powerful<br />
                    Online <br />
                    IDE<br />
                </div>
            </div>
            <div class="grid  sm:bg-black md:bg-transparent  content-center justify-items-center ">
                <div
                    class="title2 leading-10 py-2  text-4xl md:text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF] ">
                    Scryptn
                </div>
                <div class="text-lg leading-10  text-white">
                    <span>Code with ease</span>
                </div>
            </div>
            <div class="grid px-4 py-2 content-center  md:content-end justify-items-center md:justify-items-end">
                <div class="title1 text-white lg:text-black text-4xl md:text-5xl py-10 font-black tracking-normal ">
                    Now, You can <br />
                    Code without a<br />
                    PC ;) <br />
                </div>
            </div>
        </div>
    </section>
<?php
}
?>
    
    <!--               *****************   FEATURES SECTON  **************************  -->
    <section>
        <div class="grid bg-black content-center justify-items-center py-10 ">
            <div class="grid text-center text-white font-extrabold text-6xl md:py-20 py-10  ">
                THINK. CODE. REPEAT.
            </div>
            <div class="text-white font-extrabold text-4xl md:py-10  py-0">
                Features
            </div>
            <div class="lg:py-10 pb-10 -mt-16 md:-mt-72 lg:mt-0 lg:-mb-64 px-2">
                <img class="invisible lg:visible" src="./images/Component 1.png">
                <div class="visible lg:invisible text-lg text-white text-justify px-2">
                    <ul>
                        <li>1. Support for compiling various languages source code with User Friendly Interface.</li><br/>
                        <li>2. Independent of the OS for smartphones as well as computers. </li><br/>
                        <li>3. Execute your programs from anywhere.</li><br/>
                        <li>4. No more dealing with the installation erros and spending hours just configuring the setup.
                        </li><br/>
                        <li>5. Provides the best User Experience on PC as well as on a mobile.</li><br/>
                    </ul>

                </div>
            </div>
        </div>

    </section>
    <!--               *****************   LANGUAGES SECTON  **************************  -->
    <section>
        <div class="grid bg-white content-center justify-items-center py-24 lg:pl-8 ">
            <div class="grid">
                <span class="title1 text-center text-4xl md:text-5xl py-10 font-extrabold tracking-normal ">
                    Languages Supported
                </span>

            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 w-full gap-x-4 gap-y-20 py-8 px-24 lg:px-0">
                <div class="grid bg-transparent w-32 h-32 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z" />
                    </svg>
                </div>
                <div class="grid bg-transparent w-32 h-32">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M0 32v448h448V32H0zm243.8 349.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 26.8 0 46 9.3 59.8 33.7L368 290c-7.2-12.9-15-18-27.1-18-12.3 0-20.1 7.8-20.1 18 0 12.6 7.8 17.7 25.9 25.6l10.5 4.5c35.8 15.3 55.9 31 55.9 66.2 0 37.8-29.8 58.6-69.7 58.6z" />
                    </svg>
                </div>
                <div class="grid bg-transparent w-32 h-32">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M439.8 200.5c-7.7-30.9-22.3-54.2-53.4-54.2h-40.1v47.4c0 36.8-31.2 67.8-66.8 67.8H172.7c-29.2 0-53.4 25-53.4 54.3v101.8c0 29 25.2 46 53.4 54.3 33.8 9.9 66.3 11.7 106.8 0 26.9-7.8 53.4-23.5 53.4-54.3v-40.7H226.2v-13.6h160.2c31.1 0 42.6-21.7 53.4-54.2 11.2-33.5 10.7-65.7 0-108.6zM286.2 404c11.1 0 20.1 9.1 20.1 20.3 0 11.3-9 20.4-20.1 20.4-11 0-20.1-9.2-20.1-20.4.1-11.3 9.1-20.3 20.1-20.3zM167.8 248.1h106.8c29.7 0 53.4-24.5 53.4-54.3V91.9c0-29-24.4-50.7-53.4-55.6-35.8-5.9-74.7-5.6-106.8.1-45.2 8-53.4 24.7-53.4 55.6v40.7h106.9v13.6h-147c-31.1 0-58.3 18.7-66.8 54.2-9.8 40.7-10.2 66.1 0 108.6 7.6 31.6 25.7 54.2 56.8 54.2H101v-48.8c0-35.3 30.5-66.4 66.8-66.4zm-6.7-142.6c-11.1 0-20.1-9.1-20.1-20.3.1-11.3 9-20.4 20.1-20.4 11 0 20.1 9.2 20.1 20.4s-9 20.3-20.1 20.3z" />
                    </svg>
                </div>
                <div class="grid bg-transparent w-32 h-32">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M352 359.8c22.46 0 31.1 19.53 31.1 31.99c0 23.14-66.96 88.23-164.5 88.23c-137.1 0-219.4-117.8-219.4-224c0-103.8 79.87-223.1 219.4-223.1c99.47 0 164.5 66.12 164.5 88.23c0 12.27-9.527 32.01-32.01 32.01c-31.32 0-45.8-56.25-132.5-56.25c-97.99 0-155.4 84.59-155.4 159.1c0 74.03 56.42 160 155.4 160C306.5 416 320.5 359.8 352 359.8z" />
                    </svg>
                </div>
                <div class="grid bg-transparent w-32 h-32">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 476 512">
                    <path d="M463.5,143.5c-3.1-5.4-7.5-10.2-12.2-13L285.9,35.1c-9.5-5.5-25.1-5.5-34.6,0L86,130.6c-9.5,5.5-17.4,19-17.4,30v190.9
			c0,5.5,2,11.6,5.1,17.1c3.1,5.4,7.5,10.2,12.2,12.9l165.2,95.5c9.6,5.5,25.1,5.5,34.6,0l165.3-95.5c4.8-2.7,9.1-7.5,12.2-12.9
			c3.1-5.4,5-11.6,5-17.1V160.6C468.5,155.1,466.6,148.9,463.5,143.5L463.5,143.5z M268.6,389.3c-73.5,0-133.3-59.7-133.3-133.3
			s59.7-133.3,133.3-133.3c47.6,0.1,91.6,25.5,115.4,66.6l-57.7,33.4c-11.9-20.6-33.9-33.3-57.7-33.3c-36.8,0-66.7,29.9-66.7,66.7
			s29.9,66.7,66.7,66.7c23.8-0.1,45.8-12.8,57.7-33.3l57.7,33.4C360.1,363.8,316.2,389.2,268.6,389.3L268.6,389.3z M401.9,263.4
			h-14.8v14.8h-14.9v-14.8h-14.8v-14.8h14.8v-14.8h14.9v14.8h14.8V263.4z M457.4,263.4h-14.8v14.8h-14.8v-14.8H413v-14.8h14.8v-14.8
			h14.8v14.8h14.8V263.4z"/>
                    </svg>
                </div>


            </div>

        </div>
    </section>
    
    <!--               *****************   FOOTER SECTON  **************************  -->
<script>
    <?php
    if(isset($_GET['message'])){
        $message = $_GET['message'];
        if($message == "logged_out"){
            echo 'tata.info("Info Message","User Logged Out",{
                position: "br",
                duration: 5000
            })';
        }
    }

?>
</script>
<?php

include_once './includes/footer.php';

?>

</body>

</html>