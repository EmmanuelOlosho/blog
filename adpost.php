<?php 
 session_start(); 
 if(isset($_SESSION['name'])){
    $Admin = $_SESSION['name'];
 }
 else{
   header("Location:admin.php");
 }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>audiomat</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/typography.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="">
	<meta name="keywords" content="">
</head>
<body onscroll="navify()" onload="advert_timing()">
  <div class="mother">
  	<div class="container">
  		<div class="col-4 off-4 down-5">
  			<div class="container">
        <div><span class="oxygenB red">Welcome <?php echo$Admin; ?></span></div>
        <div class="down-1 mother"><a href="logout.php">logout</a></div>
  			<div class="down-15">
       <form method="POST" action="helper.php">
        <input type="text" name="title" placeholder="post title" class="field">
        <div class="mother down-5"><input type="text" name="author" placeholder="author's name" class="field"></div>
        <div class="down-5 mother" ><textarea  name="content" placeholder="Content.."></textarea></div>
        <div class="mother down-5"><input type="submit" name="submit" value="Post" class="submit-btn white"></div>
       </form>   
        </div>
  			</div>
  		</div>
  	</div>
  </div>	
</body>