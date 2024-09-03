<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Krishe Pearl by Sri Krishna Developpers. Chengicherla, Uppal's first premium gated community.</title>
    <meta name="description"
        content="First premium gated community in Chengicherla, Opp. Meridian School. 2 & 3 BHK flats 3 Towers, G+9 floors, 690 units, 25,000 Sft clubhouse.">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="img/fav-icon.png" rel="icon"/>

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap"
        rel="stylesheet"/>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"/>
    
    <!--Fancy Box-->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.min.css">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"/>

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"/>
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet"/>
    
    <style>
        
        @import url("https://fonts.googleapis.com/css2?family=Kalam:wght@400&display=swap");
:root {
	--adjust-size: 0px; /* 必要に応じて */
}

html,
body {
	overscroll-behavior-x: none;
	overscroll-behavior-y: none;
	scroll-behavior: smooth;
}
body {
	position: relative;
	color: black;
	/*font-family: "Kalam", sans-serif;*/
	min-height: 100vh;
	overflow-x: hidden;
	background-image: url("https://images.unsplash.com/photo-1531685250784-7569952593d2?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTMyOTE2OTh8&ixlib=rb-4.0.3&q=100&w=3000");
	background-size: cover;
  font-family: "Montserrat", sans-serif;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
 
}
main {
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
	max-width: 100vw;
	min-height: 100vh;
	overflow-x: hidden;
	margin-bottom: 5rem;
}

a {
	color: orange;
	text-decoration: none;
}
img {
	-moz-user-select: none;
	-webkit-user-select: none;
	-ms-user-select: none;
	user-select: none;
	pointer-events: none;
}
#gallery {
	position: relative;
	left: calc(-1 * var(--adjust-size));
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
	gap: 20px;
	max-width: 100vw;
	padding: 20px;
	-webkit-perspective: 0;
	perspective: 0;
}
#gallery figure:nth-child(7n) {
	--duration: 1s;
	--pin-color: crimson;
}
#gallery figure:nth-child(7n + 1) {
	--duration: 1.8s;
	--pin-color: hotpink;
}
#gallery figure:nth-child(7n + 2) {
	--duration: 1.3s;
	--pin-color: magenta;
}
#gallery figure:nth-child(7n + 3) {
	--duration: 1.5s;
	--pin-color: orangered;
}
#gallery figure:nth-child(7n + 4) {
	--duration: 1.1s;
	--pin-color: darkorchid;
}
#gallery figure:nth-child(7n + 5) {
	--duration: 1.6s;
	--pin-color: deeppink;
}
#gallery figure:nth-child(7n + 6) {
	--duration: 1.2s;
	--pin-color: mediumvioletred;
}
#gallery figure:nth-child(3n) {
	--angle: 3deg;
}
#gallery figure:nth-child(3n + 1) {
	--angle: -3.3deg;
}
#gallery figure:nth-child(3n + 2) {
	--angle: 2.4deg;
}
#gallery figure:nth-child(odd) {
	--direction: alternate;
}
#gallery figure:nth-child(even) {
	--direction: alternate-reverse;
}
h3.gallery {
    text-align: center;
    /*margin-top: 5.5rem;*/
}
#gallery figure {
	--angle: 3deg;
	--count: 5;
	--duration: 1s;
	--delay: calc(-0.5 * var(--duration));
	--direction: alternate;
	--pin-color: red;

	position: relative;
	display: inline-block;
	margin: var(--adjust-size);
	padding: 0.5rem;
	border-radius: 5px;
	box-shadow: 0 7px 8px rgba(0, 0, 0, 0.4);
	width: 100%;
	height: auto;
	text-align: center;
	background-color: ghostwhite;
	background-image: url("https://images.unsplash.com/photo-1629968417850-3505f5180761?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTMzMjQ3ODJ8&ixlib=rb-4.0.3&q=80&w=500");
	background-size: cover;
	background-position: center;
	background-blend-mode: multiply;

	transform-origin: center 0.22rem;
	will-change: transform;
	break-inside: avoid;
	overflow: hidden;
	outline: 1px solid transparent;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}
#gallery.active figure {
	animation-duration: var(--duration), 1.5s;
	animation-delay: var(--delay),
		calc(var(--delay) + var(--duration) * var(--count));
	animation-timing-function: ease-in-out;
	animation-iteration-count: var(--count), 1;
	animation-direction: var(--direction), normal;
	animation-fill-mode: both;
	animation-name: swing, swingEnd;
}
#gallery figure:after {
	position: absolute;
	top: 0.22rem;
	left: 50%;
	width: 0.7rem;
	height: 0.7rem;
	content: "";
	background: var(--pin-color);
	border-radius: 50%;
	box-shadow: -0.1rem -0.1rem 0.3rem 0.02rem rgba(0, 0, 0, 0.5) inset;
	filter: drop-shadow(0.3rem 0.15rem 0.2rem rgba(0, 0, 0, 0.5));
	transform: translateZ(0);
	z-index: 2;
}
figure img {
	aspect-ratio: 1 /1;
	width: 100%;
	object-fit: cover;
	display: block;
	border-radius: 5px;
	margin-bottom: 10px;
	z-index: 1;
}
figure figcaption {
	font-size: 14px;
	font-weight: 400;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
	z-index: 1;
}
figure h2 {
	color: crimson;
	font-size: 22px;
}
figure p {
	font-size: 17px;
}
figure small {
	font-size: 12px;
}
figure > div {
	width: 100%;
	height: 100%;
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
}
@keyframes swing {
	0% {
		transform: rotate3d(0, 0, 1, calc(-1 * var(--angle)));
	}
	100% {
		transform: rotate3d(0, 0, 1, var(--angle));
	}
}
@keyframes swingEnd {
	to {
		transform: rotate3d(0, 0, 1, 0deg);
	}
}
#info {
	position: relative;
	text-align: center;
	z-index: 1;
}
#info a {
	font-size: 1.1rem;
}

.bg-secondary {
    position: absolute;
    left: 0;
    right: 0;
    padding: 0 !important;
    background:none!important;
}
.navbar-dark .navbar-nav .nav-link {
    padding: 27px 23px;
}
div#navbarCollapse {
    max-width: 77.5% !important;
    padding-left: 0rem !important;
    padding-right: 0 !important;
}
.navbar-brand{
    margin-right:0!important;
}
a.navbar-brandright img {
    position: absolute;
    width: 10%;
    right: 0px;
    top: 3px;
}
div#gallery {
    padding-top: 2rem!important;
}
@media (min-width: 800px) {
	#gallery {
		grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
	}
}

</style>
</head>

<body>

    <!--desktop header-->
    <div class="header">
        <div class="containers">
            <nav>
                <div class="desk-header">
                    <!--1-->
                    <div class="logo1">
                      <div class="krishpearl-logo">
                          <a href="https://www.krishepearl.com/">
                           <img src="img/new-logo.png" alt="" class="imagesss"></a>
                      </div>
                    </div>
                      <!--2-->
                    <div class="box">
                        <div class="menuitems">
                        <a href="#over-view">OVERVIEW</a>
                        <a href="#amenties">AMENITIES</a>
                        <a href="#specifications">SPECIFICATIONS</a>
                        <a href="#master-plans">MASTERPLAN</a>
                        <a href="#floorplan">FLOOR PLANS</a>
                        <a href="#gallery">GALLERY</a>
                        <a href="#contact">CONTACT</a>
                        </div>
                    </div>
                      <!--3-->
                    <div class="logo2">
                        <div class="krishna-log">
                            <a href="https://srikrishnadeveloppers.com/">
                            <img src="img/skd-logo.png" alt="">
                           </a>
                        </div>
                    </div>
                    <!--end box-->
                </div>
              </nav>
           </div>
        </div>
    <!-- Under Nav Start -->
    <div class="container-fluid  py-3">
        <div class="container">
        </div>
    </div>
    <!-- Under Nav End -->
    
<!--Gallery sevtion start-->
<h3 class="gallery">GALLERY</h3>
<main>
	<div id="gallery">
	    <!--1-->
		<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-2.jpg">
			<img src="img/main-gallery/g-2.jpg" alt="Pink and blue clouds at sunset. " title="Photo by Jeremy Doddridge for Unsplash">
			</a>
			<figcaption>Overall View -1</figcaption>
		</figure>
		<!--2-->
			<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-1.jpg">
			<img src="img/main-gallery/g-1.jpg" alt="Clouds in shades of dark blue and magenta at sunset. " title="Photo by Szabo Viktor for Unsplash">
			</a>
			<figcaption>Overall View -2</figcaption>
		</figure>
		<!--3-->
			<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-3.jpg">
			<img src="img/main-gallery/g-3.jpg" alt="Clouds in shades of blue and gold at sunrise. " title="Photo by Łukasz Łada for Unsplash">
			</a>
			<figcaption>Overall View -3</figcaption>
		</figure>
	<!--4-->
		<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-5.jpg">
			<img src="img/main-gallery/g-5.jpg" alt="Low angle view up into a sky filled with deep blue clouds. " title="Photo by Matthew Brayer for Unsplash">
			</a>
			<figcaption>R Side Club View</figcaption>
		</figure>
		<!--5-->
			<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-4.jpg">
			<img src='img/main-gallery/g-4.jpg' alt='clouds and sky during daytime' title="Photo by Diego PH for Unsplash">
			</a>
			<figcaption>L Side Club View</figcaption>
		</figure>
		<!--6-->
			<figure>
			     <a data-fancybox="master" href="img\main-gallery\g-25.jpg">
			<img src="img/main-gallery/g-25.jpg" alt="white sea of clouds. " title="Photo by Szabo Viktor for Unsplash">
			</a>
			<figcaption>Yoga Room</figcaption>
		</figure>
		<!--7-->
		<figure>
		     <a data-fancybox="master" href="img\main-gallery\Bv-1.jpg">
			<img src="img/main-gallery/Bv-1.jpg" alt="Heavy gray clouds in the sky. " title="Photo by Simeon Muller for Unsplash">
			</a>
			<figcaption>Bird’s-eye View -1</figcaption>
		</figure>
		<!--8-->
		<figure>
		     <a data-fancybox="master" href="img\main-gallery\Bv-2.jpg">
			<img src="img/main-gallery/Bv-2.jpg" alt="Deep orange clouds at sunset. " title="Photo by Laura Vinck for Unsplash">
			</a>
			<figcaption>Bird’s-eye View -2</figcaption>
		</figure>
		<!--9-->
		<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-8.jpg">
			<img src="img/main-gallery/g-8.jpg" alt="white clouds and blue sky. " title="Photo by Carlos Kenobi for Unsplash">
			</a>
			<figcaption>Top View</figcaption>
		</figure>
		<!--10-->
		<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-9.jpg">
			<img src="img/main-gallery/g-9.jpg" alt="cloudy sky. " title="Photo by Alex Machado for Unsplash">
			</a>
			<figcaption>Street View</figcaption>
		</figure>
		<!--11-->
		<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-10.jpg">
			<img src="img/main-gallery/g-10.jpg" alt="rainbow during daytime. " title="Photo by Yulia Gadalina for Unsplash">
			</a>
			<figcaption>Club</figcaption>
		</figure>
		<!--12-->
		<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-11.jpg">
			<img src="img/main-gallery/g-11.jpg" alt="white sea of clouds. " title="Photo by Szabo Viktor for Unsplash">
			</a>
			<figcaption>Foyar</figcaption>
		</figure>
		<!--13-->
			<figure>
			     <a data-fancybox="master" href="img\main-gallery\g-12.jpg">
			<img src="img/main-gallery/g-12.jpg" alt="Clouds in shades of dark blue and magenta at sunset. " title="Photo by Szabo Viktor for Unsplash">
			</a>
			<figcaption>Gazebo</figcaption>
		</figure>
		<!--14-->
		<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-13.jpg">
			<img src="img/main-gallery/g-13.jpg" alt="Clouds in shades of blue and gold at sunrise. " title="Photo by Łukasz Łada for Unsplash">
			</a>
			<figcaption>Main entrance</figcaption>
		</figure>
		<!--15-->
		<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-14.jpg">
			<img src='img/main-gallery/g-14.jpg' alt='clouds and sky during daytime' title="Photo by Diego PH for Unsplash">
			</a>
			<figcaption>Garden - overall view</figcaption>
		</figure>
		<!--16-->
		<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-15.jpg">
			<img src="img/main-gallery/g-15.jpg" alt="white clouds and blue sky. " title="Photo by Carlos Kenobi for Unsplash">
			</a>
			<figcaption>Garden - top view</figcaption>
		</figure>
		<!--17-->
		<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-16.jpg">
			<img src="img/main-gallery/g-16.jpg" alt="cloudy sky. " title="Photo by Alex Machado for Unsplash">
			</a>
			<figcaption>Main gate</figcaption>
		</figure>
		<!--18-->
		<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-24.jpg">
			<img src="img/main-gallery/g-24.jpg" alt="rainbow during daytime. " title="Photo by Yulia Gadalina for Unsplash">
			</a>
			<figcaption>Kids play zone -1</figcaption>
		</figure>
		<!--19-->
		<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-18.jpg">
			<img src="img/main-gallery/g-18.jpg" alt="white sea of clouds. " title="Photo by Szabo Viktor for Unsplash">
			</a>
			<figcaption>Kids play zone -2</figcaption>
		</figure>
		<!--20-->
		<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-19.jpg">
			<img src='img/main-gallery/g-19.jpg' alt='clouds and sky during daytime' title="Photo by Diego PH for Unsplash">
			</a>
			<figcaption>Gym</figcaption>
		</figure>
		<!--21-->
		<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-23.jpg">
			<img src="img/main-gallery/g-23.jpg" alt="rainbow during daytime. " title="Photo by Yulia Gadalina for Unsplash">
			</a>
			<figcaption>Banquet</figcaption>
		</figure>
		<!--22-->
		<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-20.jpg">
			<img src="img/main-gallery/g-20.jpg" alt="white clouds and blue sky. " title="Photo by Carlos Kenobi for Unsplash">
			</a>
			<figcaption>Lobby -1</figcaption>
		</figure>
		<!--23-->
			<figure>
		     <a data-fancybox="master" href="img\main-gallery\g-21.jpg">
			<img src="img/main-gallery/g-21.jpg" alt="cloudy sky. " title="Photo by Alex Machado for Unsplash">
			</a>
			<figcaption>Lobby -2</figcaption>
		</figure>
		<!--24-->
			<figure>
			     <a data-fancybox="master" href="img\main-gallery\g-17.jpg">
			<img src="img/main-gallery/g-17.jpg" alt="Clouds in shades of blue and gold at sunrise. " title="Photo by Łukasz Łada for Unsplash">
			</a>
			<figcaption>Guest Bedroom</figcaption>
		</figure>
	</div>
</main>

<!--gallery section end-->
    
    
    
    <!-- Footer Start -->
  <?php
    include 'footer.php';
    ?>
    <!-- Footer End -->
    
    
    <script>
        
"use strict";
(function () {
	window.onload = () => {
		const obj = document.querySelector("#gallery");
		const time = 10000;
		function animStart() {
			if (obj.classList.contains("active") == false) {
				obj.classList.add("active");
				setTimeout(() => {
					animEnd();
				}, time);
			}
		}
		function animEnd() {
			obj.classList.remove("active");
			obj.offsetWidth;
		}
		document.addEventListener("scroll", function () {
			// scroll or scrollend
			animStart();
		});
		window.addEventListener("resize", animStart);
		animStart();
	};
})();

    </script>

  <!--Fancy Box-->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.min.js"></script>
    
    <script>
         Fancybox.bind('[data-fancybox="master"]', {
        hideScrollbar: false,
         });
    </script>    
    
    </body>
    </html>
