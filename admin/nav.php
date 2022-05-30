<nav
  class="relative w-full flex flex-wrap items-center justify-between py-3 bg-black text-gray-200 shadow-lg navbar navbar-expand-lg navbar-light"
>
  <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
    <button
      class="navbar-toggler text-gray-200 border-0 hover:shadow-none hover:no-underline py-2 px-2.5 bg-transparent focus:outline-none focus:ring-0 focus:shadow-none focus:no-underline"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent1"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <svg
        aria-hidden="true"
        focusable="false"
        data-prefix="fas"
        data-icon="bars"
        class="w-6"
        role="img"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 448 512"
      >
        <path
          fill="currentColor"
          d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
        ></path>
      </svg>
    </button>
    <div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent1">
    <div class="text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-br from-[#7EFF7B] to-[#58E1FF]">
                        <a href="./index.php">Scryptn</a>
    </div>
      <!-- Left links -->
      <ul class="navbar-nav flex flex-col pl-0 list-style-none mr-auto">
        <li class="nav-item p-2">
          <a
            class="nav-link text-white opacity-60 hover:opacity-80 focus:opacity-80 p-0"
            href="./index.php"
            >Admin Panel</a
          >
        </li>
        <li class="nav-item p-2">
          <a
            class="nav-link text-white opacity-60 hover:opacity-80 focus:opacity-80 p-0"
            href="./admin-feed.php"
            >User Feed Moderation</a
          >
        </li>
        <li class="nav-item p-2">
          <a
            class="nav-link text-white opacity-60 hover:opacity-80 focus:opacity-80 p-0"
            href="./admin-contact.php"
            >Contact Us Messages</a
          >
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="flex items-center relative">
      <!-- Icon -->
      <a class="text-white opacity-60 hover:opacity-80 focus:opacity-80 mr-4" href="#">
      <?php if (isset($_SESSION["username"])) { echo $_SESSION["username"]; }?>
      </a>
      <div class="dropdown relative bg-white text-black rounded-full w-8 h-8 flex justify-center">
        <a
          class="dropdown-toggle flex items-center hidden-arrow"
          href="#"
          id="dropdownMenuButton2"
          role="button"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
      <?php 
      
      if (isset($_SESSION["username"])) { echo strtoupper($_SESSION["username"][0]); }
      
      ?>
        </a>
        <ul
          class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 md:float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none left-auto right-0"
          aria-labelledby="dropdownMenuButton2"
        >
          <li>
            <a
              class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
              href="./index.php"
              >Dashboard</a
            >
          </li>
          <li>
            <a
              class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
              href="../online_compiler.php"
              >Online Compiler</a
            >
          </li>
          <li>
            <a
              class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
              href="./logout.php"
              >Log Out</a
            >
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
</nav>