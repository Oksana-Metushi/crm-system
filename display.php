<?php
$title = 'Customers';
require_once '../crm-system/partials/header.php';
require_once 'includes/db.inc.php';
?>
<section class="pt-12 md:pt-20 pb-6 px-4 max-w-screen-xl mx-auto" style="font-family:'Lato',sans-serif;">
    <div class="pt-10 mx-auto flex justify-between mb-6">
        <div class="text-4xl font-bold text-white text-center">Customers</div>
        <div>
            <a href="customer.php"><button
                    class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
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
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Adress</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Postalcode</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Place</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Telephone</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Email</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                <?php
                $sql = "SELECT * FROM customers";
                $result = $conn->query($sql);
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        echo "
                <tr class='hover:bg-gray-50'>
                    <th class='flex gap-3 px-6 py-4 font-normal text-gray-900'>
                        <div class='text-sm'>
                            <div class='text-gray-400'>$row[id]</div>
                        </div>
                    </th>
                    <td class='px-6 py-4'>$row[customername]</td>
                    <td class='px-6 py-4'>$row[adress]</td>
                    <td class='px-6 py-4'>$row[postalcode]</td>
                    <td class='px-6 py-4'>$row[place]</td>
                    <td class='px-6 py-4'>$row[tel]</td>
                    <td class='px-6 py-4'>$row[email]</td>
                    <td class='px-6 py-4'>
                        <div class='flex justify-end gap-4'>
                            <a href=contactlist.php?contact=$row[customername]>Contact</a>
                            <a href='viewData.php?id=$row[id]'>View </a>
                             <a href='includes/delete.php?id=$row[id]'>
                             <svg fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='h-6 w-6'>
                                    <path stroke-linecap='round' stroke-linejoin='round' d='M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0' />
                             </svg>
                            </a>
                            <a href='update.php?updateid=$row[id]'>
                                <svg fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='h-6 w-6'>
                                    <path stroke-linecap='round' stroke-linejoin='round' d='M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125' />
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
                ";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</section>