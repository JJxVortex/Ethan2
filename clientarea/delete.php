<?php require('template/loginheader.php');?>
<h2>Delete Record</h2>
<?php 

if ($_GET){

// get the id from the URL

$page_id = $_GET['page_id'];

$mysqli = new mysqli("localhost", "root", "root", "vortexmicro");

if (mysqli_connect_errno()){

    echo "I cannot connect";
	}
else{

	// build our delete query, inputting the ID from the URL
	
    $query = "DELETE FROM page_information WHERE page_id ={$page_id}";

    // Run the query with the database details above
    
    $results = mysqli_query($mysqli, $query);
    
    // echo should return "1" if sucessful
    echo $results;
    
    echo '<a href="backend.php">Return to Backend</a>';
	} 
}
?>

<?php require('template/footer.php');?>
