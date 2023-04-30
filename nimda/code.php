<?php
session_start();
require 'connection.php';

if(isset($_POST['delete_driver']))
{
  $drivers_id = mysqli_real_escape_string($con, $_POST['delete_driver']);

  $query = "DELETE FROM drivers WHERE Id='$drivers_id' ";
  $query_run = mysqli_query($con, $query);


  if($query_run)
  {
    $_SESSION['message'] = "Driver Deleted Succesfully";
    header("Location: index.php");
    exit(0);
  }
else{
  $_SESSION['message'] = " Driver Not Deleted ";
  header("Location: index.php");
  exit(0);
}
}






if(isset($_POST['update_driver']))
{
  $drivers_id = mysqli_real_escape_string($con, $_POST['driver_id']);
  $body_number = mysqli_real_escape_string($con, $_POST['body_number']);
  $toda = mysqli_real_escape_string($con, $_POST['toda']);
  $owner_name = mysqli_real_escape_string($con, $_POST['owner_name']);
  $contact_number = mysqli_real_escape_string($con, $_POST['contact_number']);
  $expdate_franchise = mysqli_real_escape_string($con, $_POST['exppdate_franchise']);
  $plate_number = mysqli_real_escape_string($con, $_POST['plate_number']);

  $query = "UPDATE  drivers SET body_number='$body_number', toda='$toda', owner_name='$owner_name', contact_number='$contact_number', 
  expdate_franchise='$expdate_franchise', plate_number='$plate_number' WHERE id='$drivers_id' ";
  $query_run = mysqli_query($con, $query);

 if($query_run)
 {
  $_SESSION['message'] = "Driver Updated Succesfully";
  header("Location: index.php");
  exit(0);
 }
 else
 {
  $_SESSION['message'] = "Driver Not Updated ";
      header("Location: index.php");
      exit(0);
 }




}


if(isset($_POST['save_driver']))
{
    $body_number = mysqli_real_escape_string($con, $_POST['body_number']);
    $toda = mysqli_real_escape_string($con, $_POST['Toda']);
    $owner_name = mysqli_real_escape_string($con, $_POST['owner_name']);
    $contact_number = mysqli_real_escape_string($con, $_POST['connumber']);
    $expdate_franchise = mysqli_real_escape_string($con, $_POST['exppdatefranch']);
    $plate_number = mysqli_real_escape_string($con, $_POST['pltnumb']);

    $query = "INSERT INTO drivers (body_number,toda,owner_name,contact_number,expdate_franchise,plate_number) VALUES ('$body_number','$toda','$owner_name','$contact_number','$expdate_franchise','$plate_number')";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
  
      $_SESSION['message'] = "Driver Added Succesfully";
      header("Location: create_driver.php");
      exit();
    }

    else
    {
      $_SESSION['message'] = "Driver Not Added" ;
      header("Location: create_driver.php");
      exit();

    } 

   }

?>