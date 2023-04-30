<?php
session_start();
require 'connection.php';

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>

  <div class="container">

    <?php include('message.php') ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Driver's Information
              <a href="create_driver.php" class="btn btn-primary btn float-end"> Add Driver </a>
            </h4>
          </div>
          <div class="card-body">

            <table class="table">
              <thead>
                <tr>

                  <th>ID</th>
                  <th>Body Number</th>
                  <th>TODA</th>
                  <th>Owner Name</th>
                  <th>Contact Number</th>
                  <th>Expiration Date of Franchise</th>
                  <th>Plate Number</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php

                $query = "SELECT * FROM drivers";
                $query_run = mysqli_query($con, $query);


                if (mysqli_num_rows($query_run) > 0) {

                  foreach ($query_run as $drivers) {

                    // echo $drivers ['body_number'];
                    ?>

                    <tr>

                      <td>
                        <?= $drivers['Id']; ?>
                      </td>
                      <td>
                        <?= $drivers['body_number']; ?>
                      </td>
                      <td>
                        <?= $drivers['toda']; ?>
                      </td>
                      <td>
                        <?= $drivers['owner_name']; ?>
                      </td>
                      <td>
                        <?= $drivers['contact_number']; ?>
                      </td>
                      <td>
                        <?= $drivers['expdate_franchise']; ?>
                      </td>
                      <td>
                        <?= $drivers['plate_number']; ?>
                      </td>
                      <td>
                        <a href="driverinfo_view.php?id=<?= $drivers['Id']; ?>" class="btn btn-info btn-sm">View</a>
                        <a href="driver_edit.php?id=<?= $drivers['Id']; ?>" class="btn btn-success btn-sm">Edit</a>
                        <form action="code.php" method="POST" class="d-inline" >
                        <button type="submit" name="delete_driver" value="<?=$drivers['Id'] ?>" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                      </td>
                    </tr>
                    <?php

                  }

                } else {

                  echo "<h5>No Record Found</h5>";

                }

                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</body>

</html>