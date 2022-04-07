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
  					<a href="music.php" class=" first-c">Music</a>
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
  			<a href="about.php">About</a>
  			<a href="music.php" class=" first-c">Music</a>
  			<a href="">Videos</a>
  			<a href="#javascriptvoid(o)" onclick="openmodal('search-modal')"><i class="fas fa-search"></i></a>
  			<!-- <a href="" class="last-l">Sign up/Login</a> -->
  			<a href="" class="last-a" id="last-a">Blog</a>
  		</nav>
  		<div class="mother centere">
  			<div class="container">
            <div class="col-4 down-7 xs-down-20 md-down-7">
              <div class=" mother down-1"><span class="oxygenR px40 white">Music Liberary <i class="fas fa-music"></i></span></div>
               <div class="mother down-1"><span class="px15 white">Download music and Listen on the go...
               </span></div>
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