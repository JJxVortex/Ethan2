<?php
$pageTitle = "Minecraft Shared Server Hosting";
require("template/header.php")
?>
<?php
$mysqli = new mysqli("localhost","root","root","vortexmicro");

if(mysqli_connect_errno()){
	
	echo "I cannot connect";

}else{
	
	$query = "SELECT * FROM page_information WHERE page_id ={$_GET['page_id']}";
	
	$results = mysqli_query($mysqli, $query);
	
	while($array = mysqli_fetch_array($results)){
		echo "<h2>{$array['page_content']}</h2>";
	}
}
?>
<?php require("template/footer.php")?>