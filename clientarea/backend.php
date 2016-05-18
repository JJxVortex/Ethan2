<?php
require('template/loginheader.php');
$pageTitle = "Backend";
?>


<?php
$mysqli = new mysqli("localhost","root","root","vortexmicro");

if(mysqli_connect_errno()){
	
	echo "I cannot connect";

}else{
	
	$query = "SELECT * FROM page_information";
	
	$results = mysqli_query($mysqli, $query);
	
	while($array = mysqli_fetch_array($results)){
		echo "<li>{$array['page_title']} <a href='edit.php?page_id={$array['page_id']}'>Edit</a> <a href='delete.php?page_id={$array['page_id']}'>Delete</a></li>";
	}
}
?>

<?php require('template/footer.php');?>