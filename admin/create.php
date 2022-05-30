<?php
require './header.php';
require './nav.php';
require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add User</title>
</head>

<body>

    <div class="bg-gray-900 w-full shadow p-8 sm:p-12">
        <p class="text-3xl font-bold leading-7 text-center text-white">Add User</p>
        <form action="../includes/register.inc.php" method="POST">
            <div class="md:flex items-center mt-8">
                <div class="w-full flex flex-col">
                    <label class="font-semibold leading-none text-gray-300">Full Name</label>
                    <input type="text" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" name="name"/>
                </div>

            </div>
            <div class="md:flex items-center mt-8">
                <div class="w-full flex flex-col">
                    <label class="font-semibold leading-none text-gray-300">Email</label>
                    <input type="text" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" name="email" />
                </div>

            </div>
            <div class="md:flex items-center mt-8">
                <div class="w-full flex flex-col">
                    <label class="font-semibold leading-none text-gray-300">Username</label>
                    <input type="text" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" name="uid" />
                </div>

            </div>
            <div class="md:flex items-center mt-12">
                <div class="w-full md:w-1/2 flex flex-col">
                    <label class="font-semibold leading-none text-gray-300">Password</label>
                    <input type="password" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" name="pwd" />
                </div>
                <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-semibold leading-none text-gray-300">Repeat Password</label>
                    <input type="password" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" name="pwdrepeat" />
                </div>
            </div>
            <div class="flex items-center justify-center w-full">
                <button type="submit" name="create" class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">
                    Send message
                </button>
            </div>
        </form>
    </div>


</body>
<?php require './footer.php';?>
</html>