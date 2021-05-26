
window.onscroll = function() {sticky_header_handler()};

let navbar = document.getElementById("header");
// let sticky = navbar.offsetTop + navbar.style.height;
let sticky = navbar.offsetTop +  navbar.offsetHeight + 0.5*navbar.offsetHeight;

function sticky_header_handler() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky_header")
  } else {
    navbar.classList.remove("sticky_header");
  }
}


function change_slider_height(){
		let sliderBox = document.getElementById("sliderBox");
		sliderBoxOffsetTop = sliderBox.offsetTop
		sliderBoxHeight = (window.innerHeight - sliderBoxOffsetTop) + "px" 
		sliderBox.style.height = sliderBoxHeight	
		let images = document.querySelectorAll(".carousel img")


		for(let counter = 0; counter < images.length; counter++){
			images[counter].style.height =  sliderBoxHeight
			// images[counter].setAttribute("height", sliderBoxHeight)
		}
}

change_slider_height()
window.onresize = function(){
	change_slider_height()
}



let toggleNavBarEventHandler = function(){
	let navBarMini = document.getElementById("navBarMini")
	let navbar = document.getElementById("navBar")
	if(navBarMini === null ){
		let _navBarMini = document.createElement("div")
		_navBarMini.setAttribute("id", "navBarMini")
		_navBarMini.style.position="fixed"
		_navBarMini.style.height="100%"
		_navBarMini.style.textAlign="center"
		_navBarMini.style.width="100%"
		_navBarMini.style.top="0"
		_navBarMini.style.padding="10px"
		_navBarMini.style.background="rgba(0,0,0,0.8)"
		_navBarMini.style.color="#ccc"
		let navBar_html = navbar.innerHTML.replaceAll("d-none", "").replaceAll("d-md-block", "").replaceAll("fa fa-bars", "fa fa-times").replaceAll("span", "div")
		// console.log(navBar_html)
		_navBarMini.innerHTML = navBar_html  
		_navBarMini.style.zIndex = 100 

		document.body.appendChild(_navBarMini);

	}else{
		navBarMini.remove()
	}
}