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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Tri-Sakay | Edit Driver Information </title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Driver
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $driver_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM drivers WHERE id='$driver_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) 
                            {
                                $drivers = mysqli_fetch_array($query_run);
                                
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="driver_id" value="<?= $drivers['Id']; ?>">

                                    <div class="mb-8">
                                        <label>Body Number</label>
                                        <input type="type" name="body_number" value="<?= $drivers['body_number']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-8">
                                        <label>TODA</label>
                                        <input type="text" name="toda" value="<?= $drivers['toda']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-8">
                                        <label>Owner Name</label>
                                        <input type="text" name="owner_name" value="<?= $drivers['owner_name']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-8">
                                        <label>Contact Number</label>
                                        <input type="number" name="contact_number" value="<?= $drivers['contact_number']; ?>"class="form-control">
                                    </div>
                                    <div class="mb-8">
                                        <label>Expiration date of Franchise</label>
                                        <input type="date" name="exppdate_franchise" value="<?= $drivers['expdate_franchise']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-8">
                                        <label>Plate Number</label>
                                        <input type="text" name="plate_number" value="<?= $drivers['plate_number']; ?>" class="form-control">
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" name="update_driver" class="btn btn-primary">
                                            Update Driver
                                        </button>
                                    </div>

                                </form>
                                <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>