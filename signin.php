<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS only -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- GLOBAL CSS-->
    <link rel="stylesheet" type="text/css" href="../Stylesheets/global.css">
    <title>Scryptn-Sign UP</title>
</head>

<body>
    <div class="grid grid-cols-1 md:grid-cols-2 h-screen w-full">
        <div class="grid bg-white px-5 content-start py-8 ">
            <div class="grid  ">
                <span class="py-8 text-2xl font-extrabold">
                    X
                </span>
            </div>
            <div class="grid md:px-16 ">
                <div class="py-10">
                    <span class="text-4xl font-extrabold text-black">
                        Welcome Back!
                    </span>
                </div>
                <div class="form content-center">
                    <form action="./includes/login.inc.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-md text-black font-bold text-right">Username:</label>
                            <input type="text" class="form-control" id="uid" name="uid"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-md text-black font-bold text-right">Password:</label>
                            <input type="password" class="form-control" id="pwd" name="pwd"
                               >
                        </div>
                        <div class="form-group text-right">
                            <span class="text-sm text-black font-bold text-left px-1 hover:text-lg ">
                                <a class="hover:no-underline hover:text-[#6AF0BF]" href="#">Forgot Password</a>
                            </span>
                        </div>
                        <div class="form-group justify-content-center">
                            <div class="grid content-center justify-items-center">
                            <button class="w-52 md:w-72 border-2 my-2 px-3 py-2 shadow hover:shadow-lg hover:text-white rounded bg-[#fff] hover:bg-[#000000]" name="submit" type="submit" >Sign In</button><br />
                            <button class="w-52 md:w-72 border-2 my-2 px-3 py-2 shadow hover:shadow-lg hover:text-white rounded bg-[#fff] hover:bg-[#000000]">Google</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="grid bg-black content-center justify-items-center">
            <h1
                class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF]">
                SCRYPTN</h1>
        </div>
    </div>
</body>

</html>