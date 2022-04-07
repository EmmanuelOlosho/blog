<?php 
 $con = mysqli_connect("localhost", "root", "", "matthew");
 if(mysqli_connect_errno()){
 	echo "failed to connect to db" . mysqli_connect_error();
 } 
?>