<?php

require './checker.php';
require './header.php';
require './nav.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>User Post Moderation</title>

</head>

<body>

<section class="h-full text-gray-400 bg-gray-900 body-font">
<div class="container px-5 py-24 mx-auto">
<div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-white">User Posts</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><p>
            </div>
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-center">
          <thead class="border-b bg-gray-800">
            <tr>
              <th scope="col" style="width:10%;" class="text-sm font-medium text-white px-6 py-4">
                ID
              </th>
              <th scope="col" style="width:70%;"class="text-sm font-medium text-white px-6 py-4">
                Title
              </th>
              <th scope="col" style="width:10%;" class="text-sm font-medium text-white px-6 py-4">
                Username
              </th>
              <th scope="col" style="width:10%;"class="text-sm font-medium text-white px-6 py-4">
                Operations
              </th>
            </tr>
          </thead class="border-b">
          <tbody>
<?php
 include '../includes/dbh.inc.php';
 $result = mysqli_query($conn, "SELECT * FROM `user_posts`");
 if (mysqli_num_rows($result) > 0) {
   $i = 0;
   while ($row = mysqli_fetch_array($result)) {
       ?>

          <tr class="bg-white border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                <?php echo $row['id']; ?>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?php echo $row['title']; ?>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?php echo $row['username']; ?>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <a href="./delete_post.php?id=<?php echo $row['id']?>">
                  Delete  
                  </a>
              </td>
            </tr class="bg-white border-b">
<?php 
$i++;
} 
?>
<?php 
 }else{
     echo "no records found";
 }
 ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

</div>
</section>
</body>

<?php
require '../includes/footer.php';
?>
</html>