<?php require('/template/header.php');?>
<main>
<div class="center">
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
		<label>First Name:</label>
		<input type="text" name="firtsname"><br>
		<label>Last Name:</label>
		<input type="text" name="lastname"></br>
		<label>Company:</label>
		<input type="text" name="company"></br>
		<label>Address Line 1:</label>
		<input type="text" name="addressline1"></br>
		<label>Address Line 2:</label>
		<input type="text" name="addressline2"></br>
		<label>Country:</label>
		<input type="text" name="country"></br>
		<label>City:</label>
		<input type="text" name="city"></br>
		<label>Postcode:</label>
		<input type="text" name="postcode"></br>
		<label>Username:</label>
		<input type="text" name="username"></br>
		<label>Password:</label>
		<input type="text" name="password"></br>
		<label>Email:</label>
		<input type="text" name="email"></br>
		<label>Phone Number:</label>
		<input type="text" name="phonenumber"></br>
		<input type="submit" value="Click Me!" class="noob">
	</form>
</div>
<?php
$mysqli = new mysqli("localhost","root","root","vortexmicro");

if(mysqli_connect_errno()){
	echo "I cannot connect";
}
else{
$query = "INSERT INTO customer_information VALUES(null,'{$_POST['firtsname']}','{$_POST['lastname']}','{$_POST['company']}','{$_POST['addressline1']}','{$_POST['addressline2']}','{$_POST['country']}','{$_POST['city']}','{$_POST['postcode']}','{$_POST['username']}','{$_POST['password']}','{$_POST['email']}','{$_POST['phonenumber']}')";

$results = mysqli_query($mysqli, $query);
if($results == 1)
{echo "Page Added!";}
else{echo "FAILED!";}
}
?>
</main>
<footer id="footer">

</footer>
</body>
</html>