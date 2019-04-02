<?php
	$conn = mysqli_connect('localhost', 'root', '', 'tilottama_tech');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>