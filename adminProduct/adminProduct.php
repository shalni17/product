<?php
include '../config/config.php';


$query = "SELECT * FROM `electronic_shop`";

$result = mysqli_query($conn, $query);

include '../header/header.php';
include '../navbar/navbar.php';
?>

<div class="container">
    <div class="float-end mt-5">
      <a href="./create.php"  class="btn btn-primary">Create</a>
    </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">Sno</th>
          <th scope="col">Category</th>
          <th scope="col">Product type</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Image url</th>
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
                       " . $row['category'] . "
                    </td>
                    <td>
                        " . $row['type'] . "
                    </td>
                    <td>
                       " . $row['price'] . "
                    </td>
                    <td>
                        " . $row['quantity'] . "
                    </td>
                    <td>
                    " . $row['image'] . "
                </td>
         
               <td  class='text-center'>
                  <a href='./delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>
              </td>
              <td  class='text-center'>
              <a href='./edit.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a>
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