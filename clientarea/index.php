<?php require('template/header.php');?>
<?php
if($_POST){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$mysqli = new mysqli("localhost", "root", "root", "vortexmicro");
	
	if(mysqli_connect_errno()){
		echo "Error connecting to database";
	}else{	
		$query = "SELECT * FROM customer_information WHERE username = '{$username}'";
		$results = mysqli_query($mysqli, $query);
		$numberOfRows = mysqli_num_rows($results);
			if($numberOfRows == 1){
			while($array = mysqli_fetch_array($results)){
				$dbPassword = $array['password'];
				if($dbPassword == $password){
					session_start();
					$_SESSION['username'] = $username;
					header('Location: backend.php');
				}
			}
		}
	}
}
?>
<!doctype html>
<html>
<head lang="en-GB">
	<title>Home</title>
	<link rel="stylesheet" href="template/style.css">
	<link rel="stylesheet" href="template/responsive.css">
	<meta charset="utf-8">
	<meta name="author" content="Template">
	<meta name="description" content="Template">
	<meta name="keywords" content="Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/favicon.ico">
</head>
<body>
<header id="header">

</header>

<main id="main">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> <!--Own URL Refers to the URL of the server-->
<div class="center">
	<label>Username:</label>
	<input type="text" name="username"><br>
	<label>Password:</label>
	<input type="password" name="password"></br>
	<input type="submit" name="login">
</div>
</form>
</main>
<?php require('template/footer.php');?>