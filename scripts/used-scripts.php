<!--Bootstrap scripts-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="includes/flashy/flashy.min.js"></script>
<!--=== Navbar scrolled ===-->
<script>
// Toggle .navbar-scrolled class to #navbar when page is scrolled
$(window).scroll(function() {
  if ($(this).scrollTop() > 100) {
    $('#navbar').addClass('navbar-scrolled');
  } else {
    $('#navbar').removeClass('navbar-scrolled');
  }
});

</script>
<!--Owl carousel-->
<script src="scripts/owl.carousel.js"></script>
<script>
//set cookie if not exist
function setCookie(){
  var d = new Date();
  d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000));
  var expires = "expires="+d.toUTCString();
  document.cookie = "RbcodeCookieAccept=true;" + expires + ";path=/";
};
// show cookie modal
$(document).ready(function() {
 if (document.cookie.indexOf("RbcodeCookieAccept=true")<0) {
     setTimeout(function(){ $('#cookieModal').modal('show'); }, 0);
    $("#ModalCookieClose").click(function () {
          $("#cookieModal").modal("hide");
      });
  }
});
</script>
</script>
<script> //preloader
var preloaderEl = document.querySelector('#preloader');
window.addEventListener('load', function() {
	preloaderEl.classList.add('preloader-hiding');
	preloaderEl.addEventListener('transitionend', function() {
		this.classList.add('preloader-hidden');
		this.classList.remove('preloader-hiding');
	});
});
</script>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    drag:true,
    autoplay:true,
		lazyLoad:true,
    nav:true,
		dots:false,
    autoplayHoverPause:true,
    responsiveClass:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:1
        },
        575.98:{
            items:2
        },
        1000:{
            items:3
        }
    }
});
</script>

<!--Fancybox -->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script>
	$('[data-fancybox="gallery"]').fancybox({
	loop: true,
	buttons: [
	"zoom",
	"share",
	"slideShow",
	"fullScreen",
  "thumbs",
	"close"
 ],
  animationEffect:"circular",
	transitionEffect: "circular"
	});
</script>
<!--Hamburger-->
<script>
  // Look for .hamburger
  var hamburger = document.querySelector(".hamburger");
  // On click
  hamburger.addEventListener("click", function() {
    // Toggle class "is-active"
    hamburger.classList.toggle("is-active");
    // Do something else, like open/close menu
  });
</script>

<!-- RUchomy header -->
<script>
	var object1=$('#background1');
	var object2=$('#background2');
	var object3=$('#background3');

	var layer=$('#scene');

	layer.mousemove(function(e){
		var valueX=(e.pageX * -4 / -100);
		var valueY=(e.pageY * -1 / -100);

		object1.css({
			'transform':'translate3D('+valueX+'px, '+valueY+'px,0px)'
		});
	});

	layer.mousemove(function(e){
		var valueX=(e.pageX * -3 / 90);
		var valueY=(e.pageY * -1 / 90);

		object2.css({
			'transform':'translate3D('+valueX+'px, '+valueY+'px,0)'
		});
	});

	layer.mousemove(function(e){
		var valueX=(e.pageX * -2 / 50);
		var valueY=(e.pageY * -1 / 50);

		object3.css({
			'transform':'translate3D('+valueX+'px, '+valueY+'px,0)'
		});
	});
</script>
