<?php
$title = 'Contact';
require_once '../crm-system/partials/header.php';
require_once 'includes/db.inc.php';
?>
<section class="pt-12 md:pt-20 pb-6 px-4 max-w-screen-xl mx-auto" style="font-family:'Lato',sans-serif;">
    <div class="pt-10 mx-auto flex justify-between mb-6">
        <div class="text-4xl font-bold text-white text-center">Contact</div>
        <div>
            <a href="contact.php"><button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Add new
                </button></a>
        </div>
    </div>
    <!-- component -->
    <div class="overflow-x-auto rounded-lg border bg-white border-gray-200 shadow-md mx-auto p-2">
        <table class="w-full border-collapse  text-left text-sm text-gray-500">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Id</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Customer</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">First Name</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Last Name</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Telephone</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Email</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                <?php
                $sql = "SELECT * FROM contacts";
                $result = $conn->query($sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $customer_id = $row['customer_id'];
                        $customer_con = "SELECT * FROM customers WHERE id='$customer_id'";
                        $customer_con_run = mysqli_query($conn, $customer_con); ?>
                        <tr class="hover:bg-gray-50">
                            <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                <div class="text-sm">
                                    <div class="text-gray-400"><?php echo $row['id']; ?></div>
                                </div>
                            </th>
                            <td class="px-6 py-4"><?php foreach ($customer_con_run as $cutomer_row) {
                                 echo $cutomer_row['customername'];
                             } ?></td>
                            <td class="px-6 py-4"><?php echo $row['firstName']; ?></td>
                            <td class="px-6 py-4"><?php echo $row['lastName']; ?></td>
                            <td class="px-6 py-4"><?php echo $row['telephoneAdress']; ?></td>
                            <td class="px-6 py-4"><?php echo $row['emailAdress']; ?></td>
                            <td class="px-6 py-4">
                                <div class="flex justify-end gap-4">
                                    <form action="editcontact.php" method="POST">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                                        <button type="submit" name="update">Update</button>
                                    </form>
                                    <form action="includes/contact.inc.php" method="POST">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
                                        <button type="submit" name="delete">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php

                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</section>