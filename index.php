<?php
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
	<link rel="shortcut icon" href="https://lh3.googleusercontent.com/BgPzk2hMmxGPS07rmps7xlrYr5Jmm7J-jCDtGjJ6FKbcpKWPqwXnN52efC3_1DsJMrB8ZInUKQ32mEkshacesAQSdWhOALyEEfksY5JaULVOMTocy8n1gehykpQmU4V97jtYCb0s=s40-p-k">
	<link rel="stylesheet" href="./css/style.css">
	<script type="text/javascript" src="js/main.js"></script>
	<title>UnFriday Cash Back</title>
</head>
<body>
<div class="navbar">
  <a href="https://unfriday.com"><img src="https://lh3.googleusercontent.com/x56wV2fckGPNPJu70te9MVjZ_ZhnEBIj8Vzlh5F_NAonxmPnDTLiQ4sUXAMRddVEEzC9pUuNC44SdAr5s2dcl8U38ObxE959HBjNzH3CNWzPEe6vnbxDLoyxBvtcSc351pvexnW2=w2400" class="headerimg"></img></a>
  <p href="#contact" class="date01"><?php echo "Today " . date("d.m.Y") . ""; ?></p>
</div>
<p class="redcon" ></p>
<p class="redcon2" ></p>
 <img src="https://lh3.googleusercontent.com/ZVaRNB6InEiCHfwFwaLAzPs_a2jmFY41Z2pAyCYowDHvvq6s7UGPaEnv6mv10jkMDA1q6raVsPZxy_6LpWmGxvFEYDGHfTivW_2kMYmaaIboEOLq4A5HUHMIHLArHtBKwwn2CLl6=w2400" alt="" class="fDOUhz">
  <img src="https://lh3.googleusercontent.com/-oF9OIfz77fQvREGKDasV3fuBVT6Dr9GRwAWqXnt58q9GphxgqmlVwcaBhO6CHXFc3jvot4zDN5gbtFJkdfluxJNlcqx1KMG3f3nbOwAqRODpaDNEx2Gnrwu7qWzB9TeSFGkmqHV=w2400" alt="" class="fDOUhz0">
<div style="margin-top: 60px;" id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'><a href=".$row['image_text'].">";
      	echo "<img src='images/".$row['image']."'>";
      echo "</a></div>";
    }
  ?>

  
 <br> <br> <br> <br> <br> <br>
 <h1 class="text-xl font-medium">Terms &amp; Conditions</h1><p class="align-middle">?????? ??????????????????????????? ???????????? ????????????????????? ?????????????????????????????????</p><p class="align-middle">?????? ????????????????????? ????????? ???????????? unfriday ??????????????? ??????????????????????????? ????????????????????? (01310187767) ????????????????????? ????????????????????? ??????????????? ????????????????????? ????????? ??????????????????????????? ????????????????????????</p><p class="align-middle">??????????????????????????????????????? ?????????????????????????????? ????????????????????? ??????????????? ??????, ????????? ????????????????????? ???????????? ???????????? ?????????????????????????????? unfriday ?????????????????????????????? ????????? ????????? ????????????????????? ???????????? ??? ????????? ????????? ?????? ?????????????????????????????? ??????????????????????????? ??????????????????????????? ?????? ????????? ????????????????????? ?????? ???????????? ?????????????????????????????? ????????????????????? ????????? ??????????????? </p><p class="align-middle">???????????????????????????????????? ???????????? ??????????????????????????? ???????????????????????? ???????????? ??? ???????????? ?????? ????????? ????????????????????? ???????????? ??????????????? ???????????????</p><p class="align-middle">??????????????????????????????????????? ????????????????????? ????????????????????????????????? ???????????? ?????????????????????, ????????? ??????????????????????????? ???????????? ???????????? ????????????????????? ???????????? ??????????????????????????? ??????????????????</p><p class="align-middle">???????????????????????? ???????????????????????? ????????????????????????????????? ??????????????? ????????????????????????, ???????????????????????? ?????? ???????????????????????????????????? ???????????????????????? ?????????????????? unfriday ??????????????????????????? ????????????????????? ????????????</p>
  <br> <br> <br> 
  
  
  
  
</div>
</body>
</html>
