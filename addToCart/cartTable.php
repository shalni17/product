<?php

include '../config/config.php';

$query = "SELECT * FROM `add_to_cart`";

$result = mysqli_query($conn, $query);

include '../header/header.php';
include '../navbar/navbar.php';

?>

<div class="container">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Sno</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">Zip</th>
                <th scope="col">Accepted Card</th>
                <th scope="col">Name of card</th>
                <th scope="col">Credit card number</th>
                <th scope="col">Exp month</th>
                <th scope="col">Exp year</th>

                <th scope="col" colspan="2" class="text-center">Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $sno = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $sno = $sno + 1;
                echo "
                  <tr>
                    <td>
                      " . $sno . "
                    </td>
                    <td>
                       " . $row['full_name'] . "
                    </td>
                    <td>
                        " . $row['email'] . "
                    </td>
                    <td>
                       " . $row['address'] . "
                    </td>
                    <td>
                    " . $row['city'] . "
                    </td>
                    <td>
                    " . $row['state'] . "
                    </td>
                    <td>
                   " . $row['zip'] . "
                    </td>
                    <td>
                   " . $row['accepted_card'] . "
                   </td>
                   <td>
                   " . $row['card_name'] . "
                   </td>
                   <td>
                    " . $row['card_number'] . "
                   </td>
                   <td>
                   " . $row['exp_month'] . "
                   </td>
                   <td>
                   " . $row['exp_year'] . "
                   </td>
                   
         
               <td  class='text-center'>
                  <a href='./delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>
              </td>
                  </tr>
                ";
            }
            ?>
        </tbody>

    </table>
</div>








<?php
include '../footer/footer.php';
?>