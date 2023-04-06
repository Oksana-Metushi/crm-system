<?php
$title = 'Customer';
require_once '../crm-system/partials/header.php';
require_once 'includes/db.inc.php';
?>

<section class="pt-12 md:pt-20 pb-6 px-4 lg:px-0" style="font-family:'Lato',sans-serif;">
    <div class="pt-10 mx-auto">
        <h1 class="text-4xl font-bold text-white text-center">Customer Data</h1>
    </div>
    <?php
    $data = $_GET['id'];
    $sql = "SELECT * FROM customers WHERE id=$data";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo "
    <main class='bg-white p-8 md:p-12 my-10 rounded-lg shadow-2xl w-full max-w-screen-xl mx-auto '>
            <div class='grid md:grid-cols-2 grid-cols-1 gap-4'>
                <div>
                    <div class='mb-6 pt-3 rounded '>
                        <label class='block text-purple-400 text-md font-semibold mb-2 ml-3' for='email'>Name</label>
                        <div type='text' name='name' class='bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3' placeholder='Full name' class='border-2'>$row[customername]</div>
                    </div>
                    <div class='mb-6 pt-3 rounded '>
                        <label class='block text-purple-400 text-md font-semibold mb-2 ml-3' for='email'>Adress</label>
                        <div type='text' name='name' class='bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3' placeholder='Full name' class='border-2'>$row[adress]</div>
                    </div>
                    <div class='mb-6 pt-3 rounded '>
                        <label class='block text-purple-400 text-md font-semibold mb-2 ml-3' for='email'>Postal code</label>
                        <div type='text' name='name' class='bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3' placeholder='Full name' class='border-2'>$row[postalcode]</div>
                    </div>
                </div>
                <div>
                    <div class='mb-6 pt-3 rounded '>
                        <label class='block text-purple-400 text-md font-semibold mb-2 ml-3' for='email'>Place</label>
                        <div type='text' name='name' class='bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3' placeholder='Full name' class='border-2'>$row[place]</div>
                    </div>
                    <div class='mb-6 pt-3 rounded '>
                        <label class='block text-purple-400 text-md font-semibold mb-2 ml-3' for='email'>Telephone</label>
                        <div type='text' name='name' class='bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3' placeholder='Full name' class='border-2'>$row[tel]</div>
                    </div>
                    <div class='mb-6 pt-3 rounded '>
                        <label class='block text-purple-400 text-md font-semibold mb-2 ml-3' for='email'>Email</label>
                        <div type='text' name='name' class='bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3' placeholder='Full name' class='border-2'>$row[email]</div>
                    </div>
                </div>
            </div>
    </main>
    ";
    }
    ?>


</section>