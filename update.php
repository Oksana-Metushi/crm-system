<?php
$title = 'Edit Customer';
require_once '../crm-system/partials/header.php';
require_once 'includes/update.inc.php';
?>
<section class="pt-12 md:pt-20 pb-6 px-4 lg:px-0" style="font-family:'Lato',sans-serif;">
    <div class="pt-10 mx-auto">
        <h1 class="text-4xl font-bold text-white text-center">Edit customer</h1>
    </div>

    <main class="bg-white p-8 md:p-12 my-10 rounded-lg shadow-2xl w-full max-w-screen-xl mx-auto ">
        <form action="" method="post">
            <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
                <div>
                    <div class="mb-6 pt-3 rounded ">
                        <label class="block text-purple-400 text-md font-semibold mb-2 ml-3" for="email">Name</label>
                        <input type="text" name="name" value=<?php echo $name ?> class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3" placeholder="Full name" class="border-2">
                    </div>
                    <div class="mb-6 pt-3 rounded ">
                        <label class="block text-purple-400 text-md font-semibold mb-2 ml-3" for="email">Adress</label>
                        <input type="text" name="adress" value=<?php echo $adress ?> class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3" placeholder="Adress" class="border-2">
                    </div>
                    <div class="mb-6 pt-3 rounded ">
                        <label class="block text-purple-400 text-md font-semibold mb-2 ml-3" for="email">Postal code</label>
                        <input type="text" name="postalcode" value=<?php echo $postalcode ?> class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3" placeholder="Postal code" class="border-2">
                    </div>
                </div>
                <div>
                    <div class="mb-6 pt-3 rounded ">
                        <label class="block text-purple-400 text-md font-semibold mb-2 ml-3" for="email">Place</label>
                        <input type="text" name="place" value=<?php echo $place ?> class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3" placeholder="Place" class="border-2">
                    </div>
                    <div class="mb-6 pt-3 rounded ">
                        <label class="block text-purple-400 text-md font-semibold mb-2 ml-3" for="email">Telephone</label>
                        <input type="tel" name="tel" value=<?php echo $tel ?> class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3" placeholder="Telephone" class="border-2">
                    </div>
                    <div class="mb-6 pt-3 rounded ">
                        <label class="block text-purple-400 text-md font-semibold mb-2 ml-3" for="email">Email</label>
                        <input type="email" name="email" value=<?php echo $email ?> class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3" placeholder="Email" class="border-2">
                    </div>
                </div>
            </div>
            <button type="submit" name="update" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 mx-auto p-4">Update Customer</button>
        </form>
    </main>
</section>