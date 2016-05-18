<?php require('/template/header.php');?>
<body>
<header>
	<div class="center">
		<h1>Add Page</h1>
	</div>
</header>

<main>
	<div class="center">
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
		<label>Page Title:</label>
		<input type="text" name="pagetitle"><br>
		<label>Page Content:</label>
		<textarea name="pagecontent"></textarea></br>
		<input type="submit" value="Click Me!" class="noob">
	</form>
		<?php			
			$mysqli = new mysqli("localhost","root","root","vortexmicro");
			
			if(mysqli_connect_errno()){
				echo "I cannot connect";
			}
			else{
			$query = "INSERT INTO page_information VALUES(null,'{$_POST['pagetitle']}','{$_POST['pagecontent']}')";
			
			$results = mysqli_query($mysqli, $query);
			if($results == 1)
			{echo "Page Added!";}
			else{echo "FAILED!";}
			}
		?>
</main>
<?php require('template/footer.php');?>