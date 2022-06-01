
<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}


  // Create database connection
  include_once('db.php');

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UnFriday Cash Back Upload</title>
	<link rel="shortcut icon" href="https://lh3.googleusercontent.com/BgPzk2hMmxGPS07rmps7xlrYr5Jmm7J-jCDtGjJ6FKbcpKWPqwXnN52efC3_1DsJMrB8ZInUKQ32mEkshacesAQSdWhOALyEEfksY5JaULVOMTocy8n1gehykpQmU4V97jtYCb0s=s40-p-k">
	<link rel="stylesheet" href="./css/upload.css">
</head>
<body>
<div id="content">

	<div class="content00">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p style="display: inline;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<a href="index.php" target="blank" style="color: green;float: right;text-decoration: underline;">Visit Cash Back </a>
			<p> <a href="unfriday_upload.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
	
	
  <form method="POST" action="unfriday_upload.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="URL of the Product"></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">Upload Product</button>
  	</div>
  </form>
   <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p >".$row['image_text']."</p>
		<br>
		<a href='delete.php?id=".$row['id']."'>Delete</a>";
      echo "</div>";
	  
    }
  ?>
</div>
</body>
</html>

<?php
if(isset($_GET['did'])) {
    $delete_id = mysql_real_escape_string($_GET['did']);
    $sql = mysql_query("DELETE FROM venu WHERE id = '".$delete_id."'");
    if($sql) {
        echo "<br/><br/><span>deleted successfully...!!</span>";
    } else {
        echo "ERROR";
    }
}
?>
