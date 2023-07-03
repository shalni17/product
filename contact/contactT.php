<?php
include '../config/config.php';


$query = "SELECT * FROM `contact`";

$result = mysqli_query($conn, $query);

include '../header/header.php';
include '../navbar/navbar.php';
?>

<div class="container">
    <div class="float-end mt-5">
      
    </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">Sno</th>
          <th scope="col">touch</th>
          <th scope="col">email</th>
          <th scope="col">description</th>
         
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
                       " . $row['touch'] . "
                    </td>
                    <td>
                        " . $row['email'] . "
                    </td>
                    <td>
                       " . $row['description'] . "
                    </td>
                   
         
               <td  class='text-center'>
                  <a href='./del.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>
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