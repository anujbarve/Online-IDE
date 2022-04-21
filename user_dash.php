<?php include './includes/header.php'; ?>
<?php include './includes/navbar-new.php'; ?>

<body>

<style>

*{
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

.profile-photo{
  border-radius: 50%;
}
</style>


<div class="container h-full w-full">

<div class="m-5 main flex md:flex-row flex-col">
<div class="profile w-full md:w-1/3">
<!-- Profile -->
<div class="profile flex justify-center">
  <div class="rounded-lg shadow-lg bg-cyan-200 max-w-sm">
    <a class="m-10 flex justify-center" data-mdb-ripple="true" data-mdb-ripple-color="light">
      <img class="profile-photo" width="200px" src="https://angularjs-template.herokuapp.com/sing-app/dist/demo/img/people/a5.jpg" alt=""/>
    </a>
    <div class="p-6">
      <h5 class="text-gray-900 text-xl font-medium mb-2">Card title</h5>
      <p class="text-gray-700 text-base mb-4">
        Some quick example text to build on the card title and make up the bulk of the card's
        content.
      </p>
      <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button>
    </div>
  </div>
</div>
<!-- /Profile -->


</div>


<div class="files w-full md:w-2/3" >

<!-- Files -->

<div class="flex flex-col ">
  <div class="overflow-x-auto ">
    <div class="inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="w-full table-fixed bg-slate-300">
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
            <tr class="border-b ">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Mark
              </td>
            </tr>
            <tr class="border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Jacob
              </td>
            </tr>
            <tr class="border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Larry
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- /Files -->
</div>
</div>

</div>

</body>

</html>
