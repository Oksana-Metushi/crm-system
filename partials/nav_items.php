<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-transparent text-black px-4 z-20"
    id="nav-content">
    <ul class="list-reset lg:flex justify-end flex-1 items-center space-x-6">
        <?php
    if (isset($_SESSION["useruid"])) {
      include "search.php";
      echo "<li class='mr-3'>
              <a class='inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4' href='display.php'>Customers</a></a>
            </li>";
      echo "<li class='mr-3'>
              <a class='inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4' href='displaycontact.php'>Contacts</a></a>
            </li>";
      echo " <a href='includes/logout.inc.php'><button
            class='mr-10 mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out'
          >
          Log out
          </button></a>";
    } else {
      echo " <a href='signup.php'><button
            class='mr-10 mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out'
          >
          Sign up
          </button></a>";
      echo " <a href='login.php'><button
            class='mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out'
          >
          Log in
          </button></a>";
    }
    ?>
    </ul>
</div>