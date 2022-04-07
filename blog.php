<?php   
 include'db.php';  
 session_start(); 
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
<body onscroll="navify()" onload="advert_timing(), reset(),">
	<div class="search-container fade-in" id="search-modal">
		<div class="mother off-1 top-6" onclick="closemodal('search-modal')"><span class="icon-close white px20"><i class="fas fa-times"></i></span></div>
		<div class="container">
			<form method="post" action="search.php">
				<input type="text" name="question" placeholder="search here..." class="search-input">
				<button type="submit" value=""><i class="fas fa-arrow-right"></i></button>
			</form>
		</div>
	</div>
	<div class="advert-container" id="modal-1">
		<div class="container down-2">
			<div class="col-3 down-5">
				<div class="container">
					<div class="advert-img-container"><img src="images/u1.png"></div></div>
				</div>
			  <div class="col-8 off-1">
			  	<div class="containe">
			  		<span class="icon-close" onclick="closemodal('modal-1')"><i class="fas fa-times"></i></span>
				   	<div><span class="px20 faded bold">Hi There !</span></div>
					   <div class="mother down-5"><span class="px13 faded">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					   tempor incid
						 </span></div>
				   </div>
			  </div> 
		  </div>
		</div>
	</div>
  <div class="bg-landing-1">
  	<div class="dark-scarf">
  		<div class="hidden-ls mobile-nav" id="mobile-nav">
  			<div class="container">
  				<div><span class="white px20">Gospel<span class="red bold">vibes<i class="fas fa-heartbeat"></i></span></span></div>
  				<div class="hand-burger" onclick="mobile_navify()">
  					<span class="h1">
  						<span class="h2"></span>
  						<span class="h3"></span>
  					</span>
  				</div>
  				<div class="nav-extended xs-down-5">
  					<a href="index.php" class="">Home</a>
  					<a href="about.php">About</a>
  					<a href="">Music</a>
  					<a href="">Videos</a>
  					<a href=""><i class="fas fa-search"></i></a>
  					<!-- <a href="" class="last-l">Sign up/Login</a> -->
  					<a href="" class="">Blog</a>
  				</div>
  			</div>
  		</div>
  		<nav class="hidden-xs hidden-lg" id="nav">
  			<span class="logo white px20 oxygenB">gospel<span class="red">vibes<span><i class="fas fa-heartbeat"></i></span></span></span>
  			<a href="index.php" class="">Home</a>
  			<a href="about.php" class=" first-c">About</a>
  			<a href="music.php">Music</a>
  			<a href="">Videos</a>
  			<a href="#javascriptvoid(o)" onclick="openmodal('search-modal')"><i class="fas fa-search"></i></a>
  			<!-- <a href="" class="last-l">Sign up/Login</a> -->
  			<a href="" class="last-a" id="last-a">Blog</a>
  		</nav>
  		<div class="mother centere">
  			<div class="container">
            <div class="col-4 down-7 xs-down-20 md-down-7">
              <div class=" mother down-1"><span class="ralewayT px40 white">Blog <i class="fas fa-blog"></i></span></div>
               <div ><span class="px13 white" id="ff">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               te</span></div>
            </div>   
        </div>
  		</div>
  	</div>
  </div>
 <?php 
 $query = mysqli_query($con,"SELECT * from blog ORDER BY id DESC");
   while($row = mysqli_fetch_assoc($query)) {
   $title = $row['title']; 
   $id = $row['id']; 
   $content = $row['content']; 
   $author = $row['author'];
  ?>
  <?php $_SESSION['content'] = $id; ?>
  <div class="mother bottom-50">
    <div class="col-8 off-2 xs-10 xs-off-1 md-10 md-off-1 down-5 xs-down-5 md-down-5">
       <div class="mother down-5">
        <div class="col-4">
          <div class="img-container"><img src="images/im1.jpg"></div>
        </div>
        <div class="col-8 down-1">
          <div class="container"><span class="px20 bold faded" ><?php echo "$title"; ?></span></div>
          <div class="container down-1"><span class="px13 faded promptoR"><i class="fas fa-clock"></i> <?php echo "$id"; ?></span></div>
           <div class="container down-1 post-containr" id="pp" onclick="display0()"><span class="px13 faded"><?php echo $content; ?>
          <div class="down-5 mother">
            <a href="#javascriptvoid(0)" class="faded btn-sm-post bg-color-code-3"><i class="fas fa-thumbs-up"></i> <span class="">0</span></a>
            <a href="logout.php" class="faded btn-sm-post bg-color-code-3"><i class="fas fa-thumbs-down"></i> <span class="">0</span></a>
            <a href="post.php?pid=<?php echo $row['id'] ?>" class="faded btn-sm-post bg-color-code-3"><i class="fas fa-share"></i> <span class="">0</span></a>
          </div>
          <div class="mother down-5 comments-session">
            <div class="bottom-bordered"><span class="px20 faded">Comments <span>0</span></span></div>
            <div class=" mother down-5">
              <div class="col-2"><div class="img-container-comment"><img src="images/im1.jpg"></div></div>
              <div class=" col-6">
                <div class=" container px15 bold"><span>Name of User:</span></div>
                <div class="container down-1"><span class="px13 faded">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt  </span></div>
              </div>
            </div>
           <div class=" mother down-5">
              <div class="col-2"><div class="img-container-comment"><img src="images/im1.jpg"></div></div>
              <div class=" col-6">
                <div class=" container px15 bold"><span>Name of User:</span></div>
                <div class="container down-1"><span class="px13 faded">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt  </span></div>
              </div>
            </div>
            <div class="mother down-10">
              <div><span class="px20">Your opinion</span></div>
              <div class="mother down-2">
                 <form method="POST" action="comment.php">
                  <input type="text" name="username" placeholder="Username..." class=" username-field">
                   <textarea class="comment-box down-3" placeholder="your opinion here"></textarea>
                   <div class="mother down-1">
                     <button type="submit" class="btn-sm-post white bg-red" value=""><i class="fas fa-share"></i></button>
                   </div>
                 </form> 
              </div>
           </div>
          </div>
        </span>
       </div>
        </div> 
       </div>
    </div>    
<?php } ?>
</div>
 <footer>
 	 <div class="mother bottom-50 bg-color-code-3">
 	 	<div class="col-10 off-1 down-5">
 	 		<div class="col-6 hidden-xs">
 	 			<div class="container">
 	 				<div class="mother"><span class="px20 white">Gospel<span class="red">vibes<i class="fas fa-heartbeat"></i></span></span></div>
 	 				<div class="mother down-2"><span class="faded px13">COPYRIGHTS @2021 ALL RIGHTS RESERVED| AUDIOMAT.COM </span></div>
 	 				<div class="mother down-2">
 	 					<a href="" class="px15 faded"><i class="fab fa-facebook"></i></a>
 	 					<a href="" class="px15 faded off-1"><i class="fab fa-instagram"></i></a>
 	 					<a href="" class="px15 faded off-1"><i class="fab fa-youtube"></i></a>
 	 					<a href="" class="px15 faded off-1"><i class="fab fa-whatsapp"></i></a>
 	 				</div>
 	 			</div>
 	 		</div>
 	 		<div class="col-6">
 	 			<div class="container xs-down-10">
 	 				<div class="col-4 xs-12 xs-down-5">
 	 					<div class="container">
 	 						<div><span class="px15 white">ABOUT US</span></div>
 	 						<div class="mother down-8"><a href="" class="px13 faded">Our Story</a></div>
 	 						<div class="mother"><a  href=""class="px13 faded">Servicves</a></div>
 	 						<div class="mother"><a  href=""class="px13 faded">Terms of use</a></div>
 	 					</div>
 	 				</div>
 	 				<div class="col-4 xs-12 xs-down-5">
 	 					<div class="container">
 	 						<div><span class="px15 white">LIBERARY</span></div>
 	 						<div class="mother down-8"><a href="" class="px13 faded">Gospel music</a></div>
 	 						<div class="mother"><a  href=""class="px13 faded">music videos</a></div>
 	 						<div class="mother"><a  href=""class="px13 faded">News/blog</a></div>
 	 					</div>
 	 				</div>
 	 				<div class="col-4 xs-12 xs-down-5">
 	 					<div class="container">
 	 						<div><span class="px15 white">RESOURCES</span></div>
 	 						<div class="mother down-8"><a href="" class="px13 faded">Newsletter</a></div>
 	 						<div class="mother"><a  href=""class="px13 faded">Album Upload</a></div>
 	 						<div class="mother"><a  href=""class="px13 faded"></a></div>
 	 					</div>
 	 				</div>
 	 				<div class="col-6 hidden-ls xs-down-10 xs-12">
 	 					<div class="container">
 	 						<div class="mother"><span class="px20 white">Gospel<span class="red">vibes<i class="fas fa-heartbeat"></i></span></span></div>
 	 						<div class="mother down-2 xs-down-2 md-down-2"><span class="faded px13">COPYRIGHTS @2021 ALL RIGHTS RESERVED| AUDIOMAT.COM </span></div>
 	 						<div class="mother down-2 xs-down-2">
 	 							<a href="" class="px15 faded"><i class="fab fa-facebook"></i></a>
 	 							<a href="" class="px15 faded off-1 xs-off-1 md-off-1"><i class="fab fa-instagram"></i></a>
 	 							<a href="" class="px15 faded off-1 xs-off-1 md-off-1"><i class="fab fa-youtube"></i></a>
 	 							<a href="" class="px15 faded off-1 xs-off-1 md-off-1"><i class="fab fa-whatsapp"></i></a>
 	 						</div>
 	 					</div>
 	 				</div>
 	 			</div>
 	 		</div>
 	 	</div>
 	 </div>
 </footer>
</body>
<script src="js/script.js"></script>
</html>