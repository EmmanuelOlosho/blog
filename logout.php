<?php 
 session_start();
 if (session_destroy()) {
 	header("Location:admin.php");
 }
?>


<?php 
 $query = mysqli_query($con,"SELECT * from blog ORDER BY id DESC");
   while($row = mysqli_fetch_assoc($query)) {
   $title = $row['title']; 
   $id = $row['id']; 
   $content = $row['content']; 
   $author = $row['author'];
?>
 <?php echo $title ?>   
<?php } ?>