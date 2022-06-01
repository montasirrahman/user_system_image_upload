<?php
  // Create database connection
  include_once('db.php');

$id = $_GET['id']; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

mysqli_query($con,"DELETE FROM images WHERE id='".$id."'");
mysqli_close($con);
header("Location: unfriday_upload.php");
?> 