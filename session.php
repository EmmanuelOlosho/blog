<?php 
include'db.php';
 session_start();
 if(isset($_SESSION['id'])){
 	$chk = $_SESSION['id'];
 	$query = mysqli_query($con, "SELECT * from blog ORDER BY id DESC");
 	$row = mysqli_fetch_assoc($query);
 	 $title = $row['title']; 
   $content = $row['content']; 
   $author = $row['author'];
 }
 else{
 	header("Location:blog.php");
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <h1><?php echo $_SESSION['id']; ?></h1>
</body>
</html>