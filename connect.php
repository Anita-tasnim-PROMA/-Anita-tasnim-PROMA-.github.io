<?php
	$conn =  mysqli_connect("localhost","root","","proma_portfolio");
	
	if($conn->connect_error) 
    	die("Connection failed: " . $conn->connect_error);
	
	if(!session_start())
	{
		session_start();
		$_SESSION['login'] = 0;
	}	
?>

<!-- <!?php -->
<!-- $server = "localhost";
$username = "root";
$password = "";
$database = "proma_portfolio";

$con = mysqli_connect($server, $username, $password, $database);

if(!$con){
 
    die("error!". mysqli_connect_error());
} -->
