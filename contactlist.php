<?php
$title = 'Contacts';
require_once '../crm-system/partials/header.php';
require_once "includes/db.inc.php";
?>
<section class="pt-12 md:pt-20 pb-6 px-4  max-w-screen-xl mx-auto" style="font-family:'Lato',sans-serif;">
    <div class="pt-10 mx-auto flex justify-between mb-6">
        <div class="text-4xl font-bold text-white text-center">Contacts</div>
    </div>
    <?php
    $contact = $_GET['contact'];
    $contact_string = str_replace("-", " ", $contact);

    $sql = "SELECT customers.customername, contacts.id, contacts.firstName, contacts.lastName, contacts.telephoneAdress, contacts.emailAdress FROM customers INNER JOIN 
    contacts ON customers.id = contacts.customer_id WHERE customers.customername='$contact_string'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    ?>
        <!-- component -->
        <div class="overflow-x-auto rounded-lg border bg-white border-gray-200 shadow-md mx-auto p-2">
            <table class="w-full border-collapse  text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Id</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">First Name</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Last Name</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Telephone</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Email</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                    <?php
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr class="hover:bg-gray-50">
                            <td class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                <div class="text-sm">
                                    <div class="text-gray-400"><?php echo $row['id']; ?></div>
                                </div>
                            </td>
                            <td class="px-6 py-4"><?php echo $row['firstName']; ?></td>
                            <td class="px-6 py-4"><?php echo $row['lastName']; ?></td>
                            <td class="px-6 py-4"><?php echo $row['telephoneAdress']; ?></td>
                            <td class="px-6 py-4"><?php echo $row['emailAdress']; ?></td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
<?php
                    
                } else {
                    echo "No data";
                }
?>
</section>