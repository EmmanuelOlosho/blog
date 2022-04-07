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

  <?php   
    if(@$_GET['err'] == 'emailexist'){
  ?>
   <div class="sign-suc fade-in" id="login">
    <span class="btn-sm faded" onclick="closemodal('login')"><i class="fas fa-times"></i></span>
    <div class="container down-2">
      <div class="col-4 down-1"><div class="img-container"><img src="images/u1.png"></div></div>
     <div class="col-6 off-1">
       <div><span class="red px30 oxygenB">Email Already Exist !</span></div>
       <div class=" down-5"><span class="px13 bold ralewayB">Dear esteemed user the email you entered already exist in our data base. Please enter a valid email</span></div>
       <div class="down-8">
         <form method="POST" action="helper.php">
           <label class="faded bold">Email :</label>
           <input type="email" name="email" placeholder="Enter a valid email" required="" class="field">
           <div class="down-10"><input type="submit" name="signUp" value="signUp" class="submit-btn white px13"></div>
           <div class="down-5 mother"><a href="#javascriptvoid(0)" class="px10 red bold" onclick="openmodal('login'), closemodal('signUp')">I have signed up already...</a></div>
         </form>
       </div>
     </div>
    </div>
  </div>
  <?php   
   }
  ?>
  <?php   
    if(@$_GET['err'] == 'successful'){
  ?>
   <div class="sign-suc fade-in" id="login">
    <span class="btn-sm faded" onclick="closemodal('login')"><i class="fas fa-times"></i></span>
    <div class="container down-2">
      <div class="col-4 down-1"><div class="img-container"><img src="images/u1.png"></div></div>
     <div class="col-6 off-1">
       <div><span class="red px30 oxygenB">SignUp Successful !</span></div>
       <div class=" down-5"><span class="px13 bold">You can now login with your email to get started with your music upload</span></div>
       <div class="down-8">
         <form method="POST" action="helper.php">
           <input type="email" name="email" required="" placeholder="Please enter your email" class="field">
           <div class="down-10"><input type="submit" name="email" value="Login" class="submit-btn white px13"></div>
         </form>
       </div>
     </div>
    </div>
  </div>
  <?php   
   }
  ?>
  <div class="uploadmusic-container fade-in" id="login">
    <span class="btn-sm faded" onclick="closemodal('login')"><i class="fas fa-times"></i></span>
    <div class="container down-2">
      <div class="col-4 down-1"><div class="img-container"><img src="images/u1.png"></div></div>
     <div class="col-6 off-1">
       <div><span class="red px30 oxygenB">User Login</span></div>
       <div class="down-8">
         <form method="POST" action="helper.php">
           <input type="email" name="email" required="" placeholder="Please enter your email" class="field">
           <div class="down-10"><input type="submit" name="email" value="Login" class="submit-btn white px13"></div>
           <div class="down-5 mother"><a href="#javascriptvoid(0)" class="px10 red bold" onclick="openmodal('signUp'), closemodal('login')">I haven't signed up...</a></div>
         </form>
       </div>
     </div>
    </div>
  </div>
  <div class="uploadmusic-container fade-in" id="signUp">
    <span class="btn-sm faded" onclick="closemodal('signUp')"><i class="fas fa-times"></i></span>
    <div class="container down-2">
      <div class="col-4 down-2"><div class="img-container"><img src="images/u1.png"></div></div>
     <div class="col-6 off-1">
       <div><span class="faded px30 oxygenB">Music/Album Upload</span></div>
       <div class="down-3"><span class="px13 faded">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
       tempor incididunt 
       </span></div>
       <div class="down-8 ">
         <form method="POST" action="helper.php">
           <label class="faded bold">Email :</label>
           <input type="email" name="email" placeholder="Enter a valid email" required="" class="field">
           <div class="down-10"><input type="submit" name="signUp" value="signUp" class="submit-btn white px13"></div>
           <div class="down-5 mother"><a href="#javascriptvoid(0)" class="px13 red bold" onclick="openmodal('login'), closemodal('signUp')">I have signed up already...</a></div>
         </form>
       </div>
     </div>
    </div>
  </div> 
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
  <div class="bg-landing">
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
  					<a href="" class="">Home</a>
  					<a href="">About</a>
  					<a href="">Music</a>
  					<a href="">Videos</a>
  					<a href=""><i class="fas fa-search"></i></a>
  					<!-- <a href="" class="last-l">Sign up/Login</a> -->
  					<a href="blog.php" class="">Blog</a>
  				</div>
  			</div>
  		</div>
  		<nav class="hidden-xs hidden-lg" id="nav">
  			<span class="logo white px20 oxygenB">gospel<span class="red">vibes<span><i class="fas fa-heartbeat"></i></span></span></span>
  			<a href="index.php" class="first-c">Home</a>
  			<a href="about.php">About</a>
  			<a href="">Music</a>
  			<a href="">Videos</a>
  			<a href="#javascriptvoid(o)" onclick="openmodal('search-modal')"><i class="fas fa-search"></i></a>
  			<!-- <a href="" class="last-l">Sign up/Login</a> -->
  			<a href="blog.php" class="last-a" id="last-a">Blog</a>
        <a href="#javascriptvoid(0)" class="white  p-left" onclick="openmodal('login')">Login/signUp</a>
  		</nav>
  		<div class="mother centere">
  			<div class="container down-7 xs-down-20 md-down-7">
  				<div class="col-6 off-1 xs-down-20">
  					<div><span class="px80 xs-px50 white">Audio<span class="color-code-1">mat <i class="fas fa-microphone"></i></span></span></div>
  					<div class="xs-down-1 xs-12"><span class="px13 white xs-px10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
  					</span></div>
  					<div class="mother down-4 xs-down-3">
  						<a href="#music" class="btn-sm bg-red px13 white">Download Music <i class="fas fa-download"></i></a>
  						<a href="#javascriptvoid(0)" class="btn-sm border-color-code-1 px13 white" onclick="openmodal('signUp')">Upload Music <i class="fas fa-upload"></i> </a>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
  <div class="mother bottom-50" id="music">
  	<div class="col-8 off-2 xs-10 xs-off-1 md-10 md-off-1 down-5 xs-down-5 md-down-5">
  		<div class="col-5 bottom-faded"><span class="px20 faded ralewayR">Recent Uploads</span></div>
  		<div class="mother down-8 xs-down-10 md-down-8">
  			<div class="col-4 xs-12 md-4">
  				<div class="col-6 md-6"><div class="img-container-music"><img src="images/im1.jpg"></div></div>
  				<div class="col-6 xs-12 xs-top-10 md-6">
  					<div class="container down-15 xs-down-15 off-2">
  						<span class="px15 bold xs-px20">God Is Great <i class="fas fa-music"></i></span>
  						<div class="down-2 mother"><span class="px13 faded xs-px15">Oladapo Matthew</span></div>
  						<div class="down-5 mother"><span class="faded xs-px15 bold">00/000/00</span></div>
  					</div>
  				</div>
  			</div>
  			<div class="col-4 off-4 xs-12 right xs-left down-5 xs-down-2">
  				<a href="" class="btn-sm-1 px13">Download <i  class="fas fa-download"></i></a>
  				<a href="" class="btn-sm-1 px13">Play <i  class="fas fa-play"></i></a>
  			</div> 
  		</div>
  		<div class="mother down-1 xs-down-10 md-down-8">
  			<div class="col-4 xs-12 md-4">
  				<div class="col-6 md-6"><div class="img-container-music"><img src="images/im1.jpg"></div></div>
  				<div class="col-6 xs-12 xs-top-10 md-6">
  					<div class="container down-15 xs-down-15 off-2">
  						<span class="px15 bold xs-px20">God Is Great <i class="fas fa-music"></i></span>
  						<div class="down-2 mother"><span class="px13 faded xs-px15">Oladapo Matthew</span></div>
  						<div class="down-5 mother"><span class="faded xs-px15 bold">00/000/00</span></div>
  					</div>
  				</div>
  			</div>
  			<div class="col-4 off-4 xs-12 right xs-left down-5 xs-down-2">
  				<a href="" class="btn-sm-1 px13">Download <i  class="fas fa-download"></i></a>
  				<a href="" class="btn-sm-1 px13">Play <i  class="fas fa-play"></i></a>
  			</div> 
  		</div>
  		<div class="mother down-1 xs-down-10 md-down-8">
  			<div class="col-4 xs-12 md-4">
  				<div class="col-6 md-6"><div class="img-container-music"><img src="images/im1.jpg"></div></div>
  				<div class="col-6 xs-12 xs-top-10 md-6">
  					<div class="container down-15 xs-down-15 off-2">
  						<span class="px15 bold xs-px20">God Is Great <i class="fas fa-music"></i></span>
  						<div class="down-2 mother"><span class="px13 faded xs-px15">Oladapo Matthew</span></div>
  						<div class="down-5 mother"><span class="faded xs-px15 bold">00/000/00</span></div>
  					</div>
  				</div>
  			</div>
  			<div class="col-4 off-4 xs-12 right xs-left down-5 xs-down-2">
  				<a href="" class="btn-sm-1 px13">Download <i  class="fas fa-download"></i></a>
  				<a href="" class="btn-sm-1 px13">Play <i  class="fas fa-play"></i></a>
  			</div> 
  		</div>
  		<div class="mother down-1 xs-down-10 md-down-5 px13 centered"><a href="" class="btn-sm bg-red white ">View full Library</a></div>
  	</div>
  </div>
  <div class="mother bg-color-code-3 bottom-50 ">
  	<div class="col-8 off-2 xs-container md-8 md-off-2 down-5 xs-down-5 md-down-5">
  		<div class="centered ralewayT mother xs-down-5"><span class="px30 white"><i class="fas fa-video"></i> Music Videos</span></div>
  		<div class="col-8 off-2 centered down-3 xs-down-3 xs-12"><span class="white ralewayT px13">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  		quis nostrud.</span></div>
  	<div class="mother down-5 xs-down-10">
  		<div class="col-3 xs-6">
  			<div class="container"><div class="video-container"><img src="images/im1.jpg"></div></div>
  		</div>
  		<div class="col-3 xs-6">
  			<div class="container"><div class="video-container"><img src="images/im1.jpg"></div></div>
  		</div>
  		<div class="col-3 xs-6 hidden-xs">
  			<div class="container"><div class="video-container"><img src="images/im1.jpg"></div></div>
  		</div>
  		<div class="col-3 xs-6 hidden-xs">
  			<div class="container"><div class="video-container"><img src="images/im1.jpg"></div></div>
  		</div>
  		<div class="centered mother down-5 xs-down-10 md-down-5"><a href="" class="white px13 btn-sm border-color-code-1">View gallery</a></div>
  	</div>
  </div>
 </div>
 <div class="mother bottom-50">
 	<div class="col-10 off-1 xs-10 xs-off-1 md-10 md-off-1 down-5 xs-down-5 md-down-5">
 		<div class="bottom-faded col-5"><span class="px20 ralewayR faded">News/Articles</span></div>
 	</div>
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