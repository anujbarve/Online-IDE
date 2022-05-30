<?php

include_once './includes/header.php';
include_once './includes/navbar-new.php';


?>


<!-- Simple Responsive Hero -->
<?php

if (isset($_SESSION["userUid"])) {
?>
<header class="">
  <div class="relative overflow-hidden bg-no-repeat bg-cover h-full " style="
    background-position: 50%;
    background-image: url('https://images.pexels.com/photos/3780104/pexels-photo-3780104.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');

  ">
    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
      style="background-color: rgba(0, 0, 0, 0.75)">
      <div class="flex justify-center items-center h-full">
        <div class="text-center text-white px-6 md:px-12">
          <h1 class="text-5xl font-bold mt-0 mb-6">Hello <?php echo $_SESSION["userUid"] ?></h1>
          <h3 class="text-3xl font-bold mb-8">Go to Dashboard</h3>
        <a href="./user_dash.php">

        <button type="button"
            class="inline-block px-6 py-2.5 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
            data-mdb-ripple="true" data-mdb-ripple-color="light">
            Dashboard
          </button>

        </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>

<?php
}else {
?>

<header>
   <!-- Jumbotron -->
  <div class="text-center bg-gray-50 text-gray-800 py-20 px-6">
    <h1 class="text-5xl font-bold mt-0 mb-6">Login</h1>
    <h3 class="text-3xl font-bold mb-8">Please login to get the full functionality of the website</h3>
    <a class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="./signin.php" role="button">Login</a>
  </div>
  <!-- Jumbotron -->
</header>

<?php
}
?>




<!-- / Simple Responsive Hero -->

</body>

<?php

include_once './footer.php';

?>

</html>