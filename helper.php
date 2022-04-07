<?php 
include'db.php';
session_start(); 
  if(isset($_POST['login'])){
    $name = "Ayomide";
    $pass = "0038199";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $trn_date = date('d-m-y H:i:S');
    if(empty($username) || empty($password)){
        header("Location:admin.php?err=empty_string");
        exit();
    }
    if($username == $name AND $password == $pass){
     $_SESSION['name'] = $username;
      header("Location:adpost.php");
    }
  }

  if(isset($_POST['submit'])){
     $title = $_POST['title'];
     $author = $_POST['author'];
     $content = $_POST['content'];
     $trn_date = date('y-m-d H:i:s');
     echo "$title";
  if(empty($title) || empty($author) || empty($content) ){
   header("Location:adpost.php?err=empty_fields");
  }
  else{
  $query = mysqli_query($con, "INSERT into  blog(title, author, content, trn_date) VALUES ('$title', '$author', '$content', '$trn_date')") or die(mysqli_connect_error($con));
  header("Location:adpost.php?err=posted!");
  }
   }
  
?>