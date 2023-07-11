<?php
session_start();
include '../config/config.php';

$query = "SELECT * FROM `buy`";

$result = mysqli_query($conn, $query);

include '../header/header.php';
include '../navbar/navbar.php';
?>


  <div class="container">
    <a href="../home/home.php" class="btn btn-primary mt-3">Home</a>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Product_id</th>
          <th scope="col">Customer_Name</th>
          <th scope="col">Product_name</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Total_Price</th>
          <th scope="col">Address</th>
          <th scope="col">Phone_no</th>

        </tr>
      </thead>
      <tbody>
        <?php
        $Product_id = 0;

        while ($row = mysqli_fetch_assoc($result)) {
          $Product_id = $Product_id + 1;

          echo "
              <tr>
                <td>
                 " . $Product_id . "
                </td>
                 <td>
                 " . $row['customer_name'] . "
                </td>
                <td>
                 " . $row['product_name'] . "
                </td>
                 <td>
                 " . $row['price'] . "
                 </td>
                 <td>
                 " . $row['quantity'] . "
                 </td>
                 <td>
                  " . $row['total_price'] . "
                 </td>
                 <td>
                   " . $row['address'] . "
                 </td>
                 <td>
                   " . $row['phone_no'] . "
                  </td>
                  <td  class='text-center'>
                  <a href='./dell.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>
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