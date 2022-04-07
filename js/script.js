var x = 0
var y = 0
var u = 0
function navify() {
	console.log(pageYOffset)
	if(window.pageYOffset >= 80){
     document.getElementById('nav').className = 'nav-on-scroll hidden-xs hidden-lg'
     document.getElementById('last-a').style.color = '#fff'   
	}
	else{
	   document.getElementById('nav').className = 'hidden-xs hidden-lg'	
	}
}
function mobile_navify(){
	if(x == 0){
		document.getElementById('mobile-nav').style.animationName = 'open_nav'
		x = 1
	}
	else if(x == 1){
		document.getElementById('mobile-nav').style.animationName = 'close_nav'
		x = 0
	}
}
function closemodal(modal){
	document.getElementById(modal).style.display = 'none'
}
function openmodal(modal){
	document.getElementById(modal).style.display = 'block'
}
function advert_timing(){
  setTimeout(function(){
    openmodal('modal-1')
  },3000)
}
function openpost(p){
		document.getElementById(p).className = 'container down-1'
}
function closepost(p){
		document.getElementById(p).className = 'container down-1 post-container'
}
function like(po){
   if(u == 0){
      document.getElementById(po).innerHTML ++
      u = 1
   }
   else{
   	document.getElementById(po).innerHTML --
   	u = 0
   }
}

