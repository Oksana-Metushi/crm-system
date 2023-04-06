<?php
$title = 'Log in';
require_once '../crm-system/partials/header.php';
?>
<section class="pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <div class="pt-10 mx-auto">
        <h1 class="text-4xl font-bold text-white text-center">Sign in to your account</h1>
    </div>
    <main class="bg-white max-w-xl mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
    <!-- <?php include "partials/error-messages.php"; ?> -->
        <form action="includes/login.inc.php" method="post">
            <div class="mb-6 pt-3 rounded ">
                <label class="block text-purple-400 text-md font-semibold mb-2 ml-3" for="email">Username</label>
                <input type="text" name="uid" placeholder="Username/Email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3" autocomplete="off">
            </div>
            <div class="mb-6 pt-3 rounded">
                <label class="block text-purple-400 text-md font-semibold mb-2 ml-3" for="password">Password</label>
                <input type="password" name="pwd" placeholder="Password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3" autocomplete="off">
            </div>
            <button type="submit" name="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 w-full">Log in</button>
            </div>
        </form>
    </main>
</section>