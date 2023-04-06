<?php
$title = 'Homepage';
require_once '../crm-system/partials/header.php';
?>

<div class="pt-24 max-w-screen-xl mx-auto">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <div class="flex flex-col w-full md:w-2/5 justify-center md:items-start text-center md:text-left">
            <?php
            if (isset($_SESSION["useruid"])) {
                echo "<p class='mb-10 text-3xl font-bold leading-tight'>Welcome " . $_SESSION["useruid"] . " !</p>";
            }
            ?>
            <a href='display.php'><button class='mr-10 mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out'>
                    Coustomers
                </button></a>
            <a href='displaycontact.php'><button class='mr-10 mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out'>
                    Contacts
                </button></a>
        </div>
        <div class="w-full md:w-3/5 py-6 text-center">
            <img class="w-full md:w-4/5 z-50" src="style/image/hero.png" />
        </div>
    </div>
</div>

<?php
require_once '../crm-system/partials/footer.php';
?>