<?php include './includes/header.php'; ?>
<?php include './includes/navbar-new.php'; ?>
<?php include './includes/checker.php'; ?>

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

  <head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4">

        <?php

        function thumbnail_picker($scode){
          if($scode == "python"){
            echo "./images/langs/python.jpeg";
          }elseif($scode == "js"){
            echo "./images/langs/js.jpg";
          }elseif($scode == "c"){
            echo "./images/langs/c.jpeg";
          }elseif($scode == "cpp"){
            echo "./images/langs/cpp.jpg";
          }elseif($scode == "java"){
            echo "./images/langs/java.jpg";
          }
        }

  include './includes/dbh.inc.php';
  $result = mysqli_query($conn, "SELECT * FROM `user_posts`");
  if (mysqli_num_rows($result) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
        ?>

        <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="<?php $scode = $row['scode']; thumbnail_picker($scode)?>" alt="blog">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1"><?php echo $row['username'];?></h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><?php echo $row['title'];?></h1>
            <p class="leading-relaxed mb-3"><?php echo $row['description'];?></p>
            <div class="flex items-center flex-wrap">
              <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="./online_compiler.php?filename=<?php echo $row['fname'];?>">Learn More
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
              <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
              Posted on <?php echo $row['date'];?>
              </span>
            </div>
          </div>
        </div>
      </div>
            
        <?php    
          
          }
        } else {
          echo "No result found";
        }
        ?>
      </div>
    </div>
  </section>


</body>

<?php include './includes/footer.php' ?>

</html>