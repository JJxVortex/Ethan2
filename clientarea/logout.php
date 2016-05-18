<?php
session_start();
if(isset($_SESSION['username']));{
	session_destroy(); #Removes cookie
	header('Location: index.php'); #Redirects you to index.php
}
?>