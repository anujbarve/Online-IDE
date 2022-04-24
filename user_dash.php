<?php include './includes/header.php'; ?>
<?php include './includes/navbar-new.php'; ?>

<body>

  <style>
    * {
      box-sizing: border-box;
    }

    /* .main{
  background-color: red;
}

.profile{
  background-color: yellow;
}

.files{
  background-color: blue;
} */

    .profile-photo {
      border-radius: 50%;
    }
  </style>


  <?php

  include './includes/dbh.inc.php';
  $id = $_SESSION["userID"];
  $result = mysqli_query($conn, "SELECT * FROM `users` WHERE `userID` = $id;");
  $row = mysqli_fetch_array($result);

  ?>

  <div class="p-5 container w-full main flex md:flex-row flex-col">
    <div class="profile w-full md:w-1/3 flex justify-center">
      <!-- Profile -->
      <div class="rounded-lg bg-gray-200 max-w-sm">
        <a class="m-8 flex justify-center" data-mdb-ripple="true" data-mdb-ripple-color="light">
          <img class="profile-photo" width="200px" src="<?php if (isset($row["user_photo"])) {
                                                          echo "./user-data/profile-photos/" . $row["user_photo"];
                                                        } else {
                                                          echo "https://angularjs-template.herokuapp.com/sing-app/dist/demo/img/people/a5.jpg";
                                                        } ?>" alt="" />
        </a>
        <div class="p-6">
          <h5 class="text-gray-900 text-xl font-medium mb-2"><?php echo $row["userName"] ?></h5>
          <p class="text-gray-700 text-base mb-4">
            <?php
            if (isset($row["user_desc"])) {
              echo $row["user_desc"];
            } else {
              echo "Profile Incomplete, Complete Your Registration";
            }

            ?>

          </p>

          <a href='<?php if (isset($row["user_gh"])) {
                      echo $row["user_gh"];
                    } else {
                      echo "#";
                    } ?>'>
            <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Github Profile</button>
          </a>
          <a href="<?php if (isset($row["user_ln"])) {
                      echo $row["user_ln"];
                    } else {
                      echo "#";
                    } ?>">
            <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">LinkedIn Profile</button>

          </a>
        </div>
      </div>
      <!-- /Profile -->


    </div>


    <div class="files md:w-2/3">

      <!-- Files -->

      <div class="mt-5 md:m-0 flex flex-col ">
        <div class="overflow-x-auto ">
          <div class="inline-block w-full">
            <div class="overflow-hidden">
            <?php
              include_once './includes/dbh.inc.php';
              $result = mysqli_query($conn, "SELECT * FROM user_files");
              ?>
              <?php
              if (mysqli_num_rows($result) > 0) {
              ?>
              <table class="w-full bg-gray-200 rounded-md ">

                <thead class="border-b">
                  <tr>
                    <th scope="col" style="width: 10%;" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                      Icon
                    </th>
                    <th scope="col" style="width: 90%;" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                      Files
                    </th>
                  </tr>
                </thead>

                <tbody>
                <?php 
                
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                ?>
                  <tr class="border-b">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo $row["extension"]; ?></td>
                  
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <?php echo $row["name"]; ?>
                    </td>
                  </tr>
                <?php
                  $i++;
                }

                ?>
                </tbody>
              </table>
              <?php
              } else {
                echo "No result found";
              }
              ?>
            </div>
          </div>
        </div>
      </div>

      <!-- /Files -->
    </div>
  </div>


</body>

<?php include './includes/footer.php' ?>

</html>