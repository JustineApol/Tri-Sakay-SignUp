<?php
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tri-Sakay | Register a Driver </title>
  </head>
  <body>
   
<div class="container mt-5">
<div class="row">
<div class="mol-md-12">

<div class="card">
<div class="card-header">
<h4> Add Driver 
<a href="home.html" class="btn btn-danger float-end"> Home </a>
</h4>
</div>
<div class="card-body">
   <form action="code.php" method="POST">
    <div class="mb-8">
    <label>ID</label>
    <input type="number" name="ID" class="form-control" readonly>
    </div>
    <div class="mb-8">
    <label>Body Number</label>
    <input type="type" name="body_number" class="form-control" >
    </div>
    <div class="mb-8">
    <label>TODA</label>
    <input type="text" name="toda" class="form-control" >
    </div>
    <div class="mb-8">
    <label>Owner Name</label>
    <input type="text" name="owner_name" class="form-control" >
    </div>
    <div class="mb-8">
    <label>Contact Number</label>
    <input type="number" name="contact_number" class="form-control" >
    </div>
    <div class="mb-8">
    <label>Expiration date of Franchise</label>
    <input type="date" name="exppdate_franchise" class="form-control" >
    </div>
    <div class="mb-8">
    <label>Plate Number</label>
    <input type="text" name="plate_number" class="form-control" >
    </div>
    <div class="mb-3">
    <button  type="submit" name="save_driver" class="btn btn-primary">Register Driver</button>
    </div>

</div> 
</div>
</div>
</div>
</div>
</div>    
</div>
</div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>
</html>