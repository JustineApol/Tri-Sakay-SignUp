<?php
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

    <title>Tri-Sakay | View Information </title>
</head>

<body>

    <div class="container mt-5">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Driver
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $driver_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM drivers WHERE id='$driver_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $drivers = mysqli_fetch_array($query_run);

                                ?>
                                <form action="code.php" method="POST">


                                    <div class="mb-8">
                                        <label>Body Number</label>
                                        <p class="form-control">
                                            <?= $drivers['body_number']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-8">
                                        <label>TODA</label>
                                        <p class="form-control">
                                            <?= $drivers['toda']; ?>
                                        </p>

                                    </div>
                                    <div class="mb-8">
                                        <label>Owner Name</label>

                                        <p class="form-control">
                                            <?= $drivers['owner_name']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-8">
                                        <label>Contact Number</label>

                                        <p class="form-control">
                                            <?= $drivers['contact_number']; ?>
                                        </p>

                                    </div>
                                    <div class="mb-8">
                                        <label>Expiration date of Franchise</label>

                                        <p class="form-control">
                                            <?= $drivers['expdate_franchise']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-8">
                                        <label>Plate Number</label>

                                        <p class="form-control">
                                            <?= $drivers['plate_number']; ?>
                                        </p>
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