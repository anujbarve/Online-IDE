<?php

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
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalLg" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLgLabel">
                        Update Post
                    </h5>
                    <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body relative p-4">
                    <form action="./includes/new_post.php" method="post" enctype="multipart/form-data">
                        <div class="flex flex-row items-center justify-center lg:justify-start">
                        </div>
                        <div class="mb-6">
                            <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" name="id" value="" placeholder="ID" />
                        </div>
                        <div class="mb-6">
                            <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" name="fname" value="<?php if (isset($_SESSION["fname"])) {
                                                                                                                                                                                                                                                                                                                                                                        echo $_SESSION["fname"];
                                                                                                                                                                                                                                                                                                          } ?>" placeholder="File Name" />
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
                            <button name="update" type="update" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                POST
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<!-- /Modal -->

<section class="text-gray-400 bg-gray-900 body-font">
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
          <thead class="bg-black">
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
          </thead class="">
          <tbody>
<?php
 include '../includes/dbh.inc.php';
 $result = mysqli_query($conn, "SELECT * FROM `user_posts`");
 if (mysqli_num_rows($result) > 0) {
   $i = 0;
   while ($row = mysqli_fetch_array($result)) {
       ?>

          <tr class="bg-gray-800 text-white">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <?php echo $row['id']; ?>
              </td>
              <td class="text-sm font-light px-6 py-4 whitespace-nowrap">
              <?php echo $row['title']; ?>
              </td>
              <td class="text-sm font-light px-6 py-4 whitespace-nowrap">
              <?php echo $row['username']; ?>
              </td>
              <td class="text-sm font-light px-6 py-4 whitespace-nowrap">
              <button type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out"  data-bs-toggle="modal" data-bs-target="#exampleModalLg" >Update</button>
              <a href="./delete_post.php?id=<?php echo $row['id']?>">
              <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">
                Delete  
   </button>                
                  </a>
              </td>
            </tr class="bg-white">
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