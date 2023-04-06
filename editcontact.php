<?php
$title = 'Edit contact';
require_once '../crm-system/partials/header.php';
require_once 'includes/db.inc.php';
?>
<section class="pt-12 md:pt-20 pb-6 px-4 lg:px-0" style="font-family:'Lato',sans-serif;">
    <div class="pt-10 mx-auto">
        <h1 class="text-4xl font-bold text-white text-center">Edit Contact</h1>
    </div>

    <main class="bg-white p-8 md:p-12 my-10 rounded-lg shadow-2xl w-full max-w-screen-xl mx-auto ">
        <?php
        if (isset($_POST['update'])) {
            $id = $_POST['edit_id'];

            $query = "SELECT * FROM contacts WHERE id='$id'";
            $result_run = mysqli_query($conn, $query);

            foreach ($result_run as $rowedit) {
            }
        ?>
            <form action="includes/contact.inc.php" method="post">
                <input type="hidden" name="udateing" value="<?php echo $rowedit['id'] ?>">
                <?php
                $sql = "SELECT * FROM customers";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) { ?>
                    <div class="mb-6 pt-3 rounded ">
                        <label class="block text-purple-400 text-md font-semibold mb-2 ml-3">Customer Name</label>
                        <select name="customer_id" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3" placeholder="First Name" class="border-2">
                            <?php foreach ($result as $row) { ?>
                                <option value="<?php echo $row["id"]; ?>"><?php echo $row["customername"]; ?></option>
                            <?php } ?>
                        <select>
                    </div>
                <?php } else {
                    echo "No data";
                }
                ?>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
                    <div>
                        <div class="mb-6 pt-3 rounded ">
                            <label class="block text-purple-400 text-md font-semibold mb-2 ml-3">First Name</label>
                            <input type="text" name="firstName" value="<?php echo $rowedit['firstName'] ?>" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3" class="border-2">
                        </div>
                        <div class="mb-6 pt-3 rounded ">
                            <label class="block text-purple-400 text-md font-semibold mb-2 ml-3">Last Name</label>
                            <input type="text" name="lastName" value="<?php echo $rowedit['lastName'] ?>" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3" class="border-2">
                        </div>
                    </div>
                    <div>
                        <div class="mb-6 pt-3 rounded ">
                            <label class="block text-purple-400 text-md font-semibold mb-2 ml-3">Telephone</label>
                            <input type="tel" name="telephoneAdress" value="<?php echo $rowedit['telephoneAdress'] ?>" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3" class="border-2">
                        </div>
                        <div class="mb-6 pt-3 rounded ">
                            <label class="block text-purple-400 text-md font-semibold mb-2 ml-3">Email</label>
                            <input type="email" name="emailAdress" value="<?php echo $rowedit['emailAdress'] ?>" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-500/75 transition duration-500 p-3" class="border-2">
                        </div>
                    </div>
                </div>
                <button type="submit" name="edit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 mx-auto p-4">Update contact</button>
            </form>
        <?php } ?>
    </main>
</section>