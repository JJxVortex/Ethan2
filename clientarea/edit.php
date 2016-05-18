<?php require('template/loginheader.php');?>

<body>
<header>
<div class="container">
<h2>Edit page</h2>
</div>
</header>



<main>
<div class="container">

<?php if($_POST){
	
$mysqli = new mysqli("localhost","root","root","vortexmicro");

if(mysqli_connect_errno()){
	
	echo "I cannot connect";
		
}else{
	
	$query = "UPDATE page_information SET page_title='{$_POST['pagetitle']}', page_content='{$_POST['pagecontent']}' WHERE page_id = {$_POST['id']}";

	$results = mysqli_query($mysqli, $query);
	
	if($results == 1)
	{echo "Page Updated!";}
else{ echo "failed";}
	
}
}else{
?>

<?php

$mysqli = new mysqli("localhost","root","root","vortexmicro");

if(mysqli_connect_errno()){
	
	echo "I cannot connect";

}else{
	
	$query = "SELECT * FROM page_information WHERE page_id = {$_GET['page_id']}";

	$results = mysqli_query($mysqli, $query);
	
	while($array = mysqli_fetch_array($results)){
		
		$page_id = $array['page_id'];
		$page_title = $array['page_title'];
		$page_content = $array['page_content'];
		
	}
	
}


?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="id" value="<?php echo $_GET['page_id'];?>" hidden>

<input type="text" name="pagetitle" value="<?php echo $page_title;?>">
<br>
<label>Page Content</label><br>
<textarea name="pagecontent">
<?php echo $page_content;?>
</textarea>
<br>

<input type="submit" value="Submit!">
</form>
<?php } ?>
</div>
</main>