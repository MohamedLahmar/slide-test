<?php 
$conn = mysqli_connect('localhost', 'root', '', 'morallab');
if(!$conn){
	echo "Unable to connect to database";
}