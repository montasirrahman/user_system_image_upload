<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UnFriday Cash Back Login</title>
	<link rel="shortcut icon" href="https://lh3.googleusercontent.com/BgPzk2hMmxGPS07rmps7xlrYr5Jmm7J-jCDtGjJ6FKbcpKWPqwXnN52efC3_1DsJMrB8ZInUKQ32mEkshacesAQSdWhOALyEEfksY5JaULVOMTocy8n1gehykpQmU4V97jtYCb0s=s40-p-k">
	<link rel="stylesheet" href="./css/login.css">
</head>
<body>
<p class="aligncenter">
	<img src="https://lh3.googleusercontent.com/BgPzk2hMmxGPS07rmps7xlrYr5Jmm7J-jCDtGjJ6FKbcpKWPqwXnN52efC3_1DsJMrB8ZInUKQ32mEkshacesAQSdWhOALyEEfksY5JaULVOMTocy8n1gehykpQmU4V97jtYCb0s=s40-p-k"  />
</p>
	<div class="allinone">
		<h1>Sign-In</h1>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Email</label><br>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label><br>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<br><button type="submit" class="btn00" name="login_user">Sign-In</button>
		</div>
		<br><br>
	</form>

	<div>
</body>
</html>