<html prefix="og: http://ogp.me/ns#">
<head>
	<meta http-equiv="Expires" content="30" />
	<meta name="google-site-verification" content="EF9Z5U_Kk1nL2n3JL7O8ny85v8X0BAa5KbkjBZkuQws" />

	<!-- GOOGLE ANALYTICS -->
	<script async>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-106189539-1', 'auto');
	  ga('send', 'pageview');
	</script>

	<!-- GOOGLE TAG MANAGER -->
	<script async>
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-MDC9Z5Z');
	</script>

	<title>Aki Imamura</title>
	<link rel="shortcut icon" href="images/tabicon.png">

	<meta property="og:url" content="images/profile3.jpg"/>

	<meta property="og:image" content="images/profile3.jpg"/>
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />

	<meta property="og:site_name" content="Aki Hairstylist"/>
	<meta property="og:title" content="Hair Dresser in Toronto: Cut, Styling & Color."/>

	<!-- <script type="text/javascript" src="js/jquery-2.1.1.min.js" async></script> -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js" async></script>
	<script type="text/javascript" src="js/materialize.js" async></script>

	<script type="text/javascript" src="js/main.js" async></script>
	<script type="text/javascript" src="js/navigation.js" async></script>
	<script type="text/javascript" src="js/map.js" async></script>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link type="text/css" rel="stylesheet" href="css/style.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body onload="">

	<!-- GOOGLE TAG MANAGER -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MDC9Z5Z"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<script type="application/ld+json">
		<?php
	        $websiteInfoString = file_get_contents("website-info.json");
	        echo $websiteInfoString;
		?>
	</script>

	<script>

	function initMap() {
		var colorMap1 = '#9e9e9e';
var colorMapBackground = '#f0f4c3';
var colorMapBuilding1 = '#dce775';
var colorMapBuilding2 = '#e6ee9c';

var styles = [

// hide store arounds
  // { featureType: 'poi.business', stylers: [{visibility: 'off'}] },
  // { elementType: 'labels.icon', stylers: [{visibility: 'off'}] },

// change map colors
  { elementType: 'geometry', stylers: [{color: colorMapBackground}] },

  { elementType: 'labels.text.fill', stylers: [{color: '#616161'}] },
  { elementType: 'labels.text.stroke', stylers: [{color: colorMapBackground}] },

  { featureType: 'administrative.land_parcel', elementType: 'labels.text.fill', stylers: [{color: '#bdbdbd'}] },

  { featureType: 'poi', elementType: 'geometry', stylers: [{color: colorMapBuilding1}] },
  { featureType: 'poi', elementType: 'labels.text.fill', stylers: [{color: '#757575'}] },
  { featureType: 'poi.park', elementType: 'geometry', stylers: [{color: colorMapBuilding2}] },
  { featureType: 'poi.park', elementType: 'labels.text.fill', stylers: [{color: colorMap1}] },

  { featureType: 'road', elementType: 'geometry', stylers: [{color: '#ffffff'}] },
  { featureType: 'road.arterial', elementType: 'labels.text.fill', stylers: [{color: '#757575'}] },
  { featureType: 'road.highway', elementType: 'geometry', stylers: [{color: '#dadada'}] },
  { featureType: 'road.highway', elementType: 'labels.text.fill', stylers: [{color: '#616161'}] },
  { featureType: 'road.local', elementType: 'labels.text.fill', stylers: [{color: colorMap1}] },

  { featureType: 'transit.line', elementType: 'geometry', stylers: [{color: colorMapBuilding2}] },
  { featureType: 'transit.station', elementType: 'geometry', stylers: [{color: colorMapBuilding1}] },

  { featureType: 'water', elementType: 'geometry', stylers: [{color: '#c9c9c9'}] },
  { featureType: 'water', elementType: 'labels.text.fill', stylers: [{color: colorMap1}]}
];


		var latlng = new google.maps.LatLng(39.305, -76.617);

		// var position = new google.maps.LatLng(43.655239, -79.380248);
		var positionMap = new google.maps.LatLng(43.655805, -79.380559);
		var position = new google.maps.LatLng(43.654878, -79.379203);
		var positionMap = new google.maps.LatLng(43.6557241,-79.3811009);
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 16,
			center: positionMap
		});
		// map.setOptions({styles: styles['default']});
		map.setOptions({styles: styles});
		var marker = new google.maps.Marker({
			position: position,
			map: map,
			title: 'Kamiya Hairsalon',
			url: "https://www.google.com/maps/place/Kamiya+Hairdressing/@43.6548872,-79.3804684,17z/data=!3m1!4b1!4m5!3m4!1s0x882ad58abe8bded7:0xdb9136e8ce897def!8m2!3d43.6548851!4d-79.3792542"
			// url: "https://www.google.ca/maps/place/Aki+Imamura+Hairstylist/@43.6552185,-79.3844401,16z/data=!4m8!1m2!2m1!1saki+!3m4!1s0x89d4cb34cc094ca7:0xc8794f493deb5022!8m2!3d43.6552089!4d-79.3800547"
		});
		google.maps.event.addListener(marker, 'click', function() {
			openUrl(this.url);
    	});
	}
</script>

	<style type="text/css">

		@font-face {
			font-family: 'myfont';
			/*src: url('fonts/melanie-bt-roman.ttf'); */
			/*src: url('fonts/Darleston.otf');*/
			/*src: url('fonts/Miama.ttf');*/
			/*src: url('fonts/MrsSaintDelafield-Regular.ttf');*/
			/*src: url('fonts/Distant_Stroke.otf');  */
			src: url('fonts/Distant_Stroke_Medium.otf');
		}

	</style>

<a id="scroll-up-button" class="btn-floating btn-large waves-effect waves-light blue-grey darken-3" onclick="scrollToTopPage()" style="position: fixed; bottom: 10px; right: 10px; display: none; z-index: 1000;"><i class="material-icons">arrow_upward</i></a>

<div style="width: 100%; position: fixed; z-index: 1000;">

	<nav id="top-navigation-bar" style="display: none;">
		<div class="nav-wrapper blue-grey darken-3">
			<!-- <div class="nav-wrapper yellow lighten-3 "> -->
			<a onclick="scrollToTopPage()" class="brand-logo right white-text" style="font-family: 'myFont';font-size: 40px; right: 1.5rem;">Aki Imamura</a>

			<div id="desktop-menu-buttons">
				<ul id="nav-mobile" class="left">
					<!-- <li><a class="white-text" onclick="scrollToAbout()">About</a></li> -->
					<!-- <li><a class="white-text" onclick="scrollToPrice()">Prices</a></li> -->
					<!-- <li><a class="white-text" onclick="scrollToHours()">Hours</a></li> -->
					<!-- <li><a class="white-text" onclick="scrollToLocation()">Location</a></li> -->
					<!-- <li><a class="white-text" onclick="scrollToContact()">Contact</a></li> -->
				</ul>
			</div>

			<div id="mobile-menu-buttons">
				<ul id="nav-mobile" class="left">
					<li>
						<a id="menu-button" data-activates="slide-out" class="white-text"><i class="material-icons">menu</i></a>
					</li>
				</ul>
			</div>

		</div>
		<div class="nav-content">

		</div>
	</nav>

</div>

<!-- Side Out Menu -->

<ul id="slide-out" class="side-nav blue-grey darken-2" style="">
	<li style="margin-top: 60px;">
		<a class="waves-effect white-text" onclick="scrollToAbout()">About</a>
	</li>

	<!-- <li><a class="waves-effect white-text" onclick="scrollToPrice()">Prices</a></li> -->
	<!-- <li><a class="waves-effect white-text" onclick="scrollToHours()">Hours</a></li> -->
	<!-- <li><a class="waves-effect white-text" onclick="scrollToLocation()">Location</a></li> -->
	<!-- <li><a class="waves-effect white-text" onclick="scrollToContact()">Contact</a></li> -->
	<li><div class="divider"></div></li>
	<!-- <li><a class="waves-effect white-text" onclick="openBookeo()">Booking</a></li> -->
	<li><a class="waves-effect white-text" onclick="openFacebook()">Facebook</a></li>
	<li><a class="waves-effect white-text" onclick="openInstagram()">Instagram</a></li>
</ul>

<a href="#" data-activates="slide-out" class="black-text button-collapse"></a>

<div class="row" style="padding-top: 40px;"><div class="col s12 m8 offset-m2">

	<h1 id="main-title" style="font-family: 'myfont';text-align: center;font-size: 100px;">Aki Imamura</h1>

	<div style="text-align: center;">
		<div class="social-icn-group">
			<!-- <a class="icn-social bookeo" target="_blank" onclick="openBookeo()"></a> -->
			<a class="icn-social facebook" target="_blank" onclick="openFacebook()"></a>
			<a class="icn-social instagram" target="_blank" onclick="openInstagram()"></a>
		</div>
	</div>

<!-- BOOK ONLINE BUTTON -->
	<!-- <div style="text-align: center;">
		<div class="social-icn-group">
		<a class="waves-effect waves-light btn grey-text text-darken-3 white" style="border: 1px solid #424242;" onclick="openBookeo()">BOOK ONLINE</a>
		</div>
	</div> -->



	<!-- BUTTON FOR SECTION NAVIGATION -->

	<!-- <div class="row" style="max-width: 450px;"> -->
		<!-- <div class="col s6" align="center" style="margin-bottom: 10px; text-align: center;"> -->
			<!-- <a class="waves-effect waves-light btn  grey-text text-darken-3 lime accent-2" onclick="scrollToAbout()" style="width: 100%;">About</a> -->
		<!-- </div> -->

		<!-- <div class="col s6" align="center" style="margin-bottom: 10px; text-align: center;">
			<a class="waves-effect waves-light btn  grey-text text-darken-3 lime accent-2" onclick="scrollToPrice()" style="width: 100%;">Prices</a>
		</div> -->
		<!-- <div class="col s6" align="center" style="margin-bottom: 10px; text-align: center;">
			<a class="waves-effect waves-light btn  grey-text text-darken-3 lime accent-2" onclick="scrollToHours()" style="width: 100%;">Hours</a>
		</div> -->
		<!-- <div class="col s6" align="center" style="margin-bottom: 10px; text-align: center;"> -->
			<!-- <a class="waves-effect waves-light btn  grey-text text-darken-3 lime accent-2" onclick="scrollToLocation()" style="width: 100%;">Location</a> -->
		<!-- </div> -->
		<!-- <div class="col s6" align="center" style="margin-bottom: 10px; text-align: center;">
			<a class="waves-effect waves-light btn  grey-text text-darken-3 lime accent-2" onclick="scrollToContact()" style="width: 100%;">Contact</a>
		</div> -->
	<!-- </div> -->

<!--
##### ABOUT
#####################################################################
-->

<div class="divider"></div>
<div id="about-section" class="section">
	<h4>About</h4>

	<div class="row">

		<div class="col m8 s12">

			<p>Aki is a creative stylist whose passion for hair began in 2004 in Japan, where she both trained and taught styling.</p>

			<p>She came to Toronto to expand her repertoire of styles and to bring her own creative style to Canada. She prides herself on providing a specialized cut for each client and cares immensely about the details and textures of her cuts, and it shows! Her focus is on having all her customers look their best. She thanks all her past clients for their business and is always open to receiving new ones.</p>

			<ul>
				<!-- <li style="list-style-type: circle;">Bookeo: <a href-"" target="_blank" onclick="openBookeo()">Online Booking</a></li> -->
				<li style="list-style-type: circle;">Facebook: <a href-"" target="_blank" onclick="openFacebook()">@akiimamurahairstylist</a></li>
				<li style="list-style-type: circle;">Instagram: <a href-"" target="_blank" onclick="openInstagram()">@akihairstylist</a></li>
			</ul>

		</div>

		<div class="col m4 s12" style="text-align: center">

			<div class="z-depth-2" style="width:100%; height:200px; display: inline-block; background-image: url('images/longProfile2.jpg'); background-repeat: no-repeat; background-attachment: inherit; background-position: center; min-width: 200px;border-radius: 2px;">
			</div>
		</div>

		<div class="col s12" style="text-align: center; margin-top: 50px; margin-bottom: -30px;" >
			<h5>Gallery</h5>
		</div>

		<div class="col s12">

			<div class="carousel" style="height: 300px;">

				<?php
					$photoArray = array (
						"1" => "images/gallery/1.jpg",
						"2" => "images/gallery/2.jpg",
						"3" => "images/gallery/3.jpg",
						"4" => "images/gallery/4.jpg",
						"5" => "images/gallery/5.jpg",
						"6" => "images/gallery/6.jpg",
						"7" => "images/gallery/7.jpg",
						"8" => "images/gallery/8.jpg"
					);
					foreach ($photoArray as $link => $imgLink) {
						echo("<a class=\"carousel-item\"><img class=\"materialboxed\" width=\"200px\" src=\"" . $imgLink . "\"></a>");
					}
				?>
  			</div>

		</div>

		</div>

	</div>

	<!-- </div> -->

<!--
##### PRICE
#####################################################################
-->

<!-- <div id="price-section" class="divider"></div>
<div class="section">
	<h4>Prices</h4> -->

	<?php
		// include 'php/HairPriceItem.php';
		// $categoryArray = HairPriceItem::makeHairPriceItemArray($websiteInfoString);
	?>

	<!-- <div class="row">
		<div class="col m6 s12">

			<h5>CUT</h5>
			<table class="price-table">	 -->
				<?php
					// $itemArray = $categoryArray["Cut"];
					// foreach ($itemArray as $priceItem) {
					// 	echo($priceItem->getStringTableRow());
					// }
				?>
			<!-- </table>

			<h5>STYLING</h5>
			<table class="price-table"> -->
				<?php
					// $itemArray = $categoryArray["Styling"];
					// foreach ($itemArray as $priceItem) {
					// 	echo($priceItem->getStringTableRow());
					// }
				?>
			<!-- </table>

		</div>

		<div class="col m6 s12">

			<h5>COLOURING </h5>
			<table class="price-table"> -->
				<?php
					// $itemArray = $categoryArray["Colouring"];
					// foreach ($itemArray as $priceItem) {
					// 	echo($priceItem->getStringTableRow());
					// }
				?>
<!-- 			</table>
		</div>
	</div>

	<div align="center">
		<a class="waves-effect waves-light btn grey-text text-darken-3 lime accent-2" style="margin-top: 20px; margin-bottom: 30px;" onclick="openBookeo()">
			See More Price
		</a>

	</div>
</div> -->

<!--
##### HOURS
#####################################################################
-->

<!-- <div id="hours-section" class="divider"></div>
<div class="section">
	<h4>Hours</h4>

	<div class="orange-text darken-4" style="background-color: #ffffff">
         	<i class="material-icons" style="position: absolute;">warning</i>
         	<p style="top: 17px;left: 50px;right: 5px; margin-left: 40px;margin-right: 30px;">
         		Due to maternity leave, the hair salon will be closed</br>
         		May 2018 to spring 2019
			</p>
  	</div>

	<ul style="opacity: 0.3;">
		<li style="list-style-type: circle;">Wednesday to Friday (11am to 7pm)</li>
		<li style="list-style-type: circle;">Saturday (10am to 6pm)</li>
	</ul>
	<p style=" margin-left: 30px; color: #b1b1b1; font-style: italic;">Hours may vary. Please inquire about availability with the stylist.</p>
</div> -->

<!--
##### LOCATION
#####################################################################
-->

<!-- <div id="location-section" class="divider"></div>
<div class="section">
	<h4>Location & Info</h4>

	<div class="row">

		<div class="col push-l7 l5 s12" style="margin-bottom: 40px;">

			<div style="">
				<p>Kamiya Hairdressing</p>
				<ul>
					<li style="list-style-type: circle;">220 Victoria St, M5B 2R6</li>
					<li style="list-style-type: circle;">Short walk from Dundas Station.</li>
					<li style="list-style-type: circle;">Easy access to public parking.</li>
				</ul>
			</div>

			<div align="center">
				<a class="waves-effect waves-light btn grey-text text-darken-3 lime accent-2"
				onclick="openKamiya()" style="display: inherit; width: 250px;">
					Website</a>
				</div>
			</div>

			<div id="map" class="col pull-l5 l7 s12" style="height:300px;"></div>

			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMAxQHRREX3zmqNnk5_UFxDomZbgIqpjA&callback=initMap" async defer></script>
		</div>

	</div> -->

	<!--
##### CONTACT
#####################################################################
-->

<!-- <div id="contact-section" class="divider"></div>
<div class="section">
	<h4>Contact</h4>

	 <ul>
      <li><div class="valign-center"><i class="smaller material-icons">perm_phone_msg</i><span>
      <a href="tel:647-381-1245">(647) 381-1245 (text)</a>
      </span></div></li>
	<li><div class="valign-center"><i class="smaller material-icons">email</i><span>
	<a href="mailto:akiimamura1021@gmail.com">akiimamura1021@gmail.com</a>
	<span></div></li>
    </ul>


    <a id="send-message-button" class="waves-effect waves-light btn modal-trigger grey-text text-darken-3 lime accent-2" href="#modal1">Send Message</a>

	<div id="modal1" class="modal modal-fixed-footer">
		<div class="modal-content">
		<h5>Send Message</h5>

			<div class="row">
				<form class="col s12 text-blue" name="message-form" id="message-form">
					<div class="row">
						<div class="input-field col m6 s12">
							<input name="name" id="name" type="text" placeholder="Tell us your name">
							<label for="name">Name</label>
						</div>
						<div class="input-field col m6 s12" style="margin-bottom: 30px;">
							<input name="email" id="email" type="email" placeholder="name@email.com" class="validate" >
							<label for="email" data-error="incorrect email format">Email*</label>
						</div>
						<div class="input-field col s12">
					      <textarea name="message" id="message" placeholder="Hello Aki, ..." class="materialize-textarea validate"></textarea>
					      <label for="message" data-error="Message need a content">Message*</label>
					    </div>
					</div>
				</form>
			</div>

		</div>
		<div class="modal-footer">
			<a class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
			<a class="modal-action waves-effect waves-green btn-flat" onclick="sendMessage()">Send</a>
		</div>
	</div>

</div> -->

<!--
##########################################################################
-->

<!-- <div id="Cancellation-policy-section" class="divider"></div>
<div class="section">
	<h4>Cancellation policy</h4>
	<blockquote style="border-left: 5px solid #eeff41;">
		<p>Out of courtesy, all appointments have a minimum 24-hour cancellation policy.</p>
		<p>Customers who are late for their appointment may lose their reservation. Please be on time.</p>
	</blockquote>
</div> -->

<!-- FOOTTER -->


</div>

<!-- <div class="row" style="margin-bottom: 0px; opacity: 0.3;"> -->
	<div class="col s12" style="opacity: 0.3;">
		<div id="footer-section" class="divider" style="margin: 40px -10px 10px -10px; height: 2px; background-color: #384750;"></div>
		<div class="row" style="margin-bottom: 0px;">

			<div class="col s6">
				<footer-left>Aki Imamura Hairstylist 2019</footer-left>

				<!-- SOCIAL ICONS -->
				<div style="text-align: left;">
					<div class="social-icn-group-footer">
						<!-- <a class="icn-social-footer bookeo" target="_blank" onclick="openBookeo()"></a> -->
						<a class="icn-social-footer facebook" target="_blank" onclick="openFacebook()"></a>
						<a class="icn-social-footer instagram" target="_blank" onclick="openInstagram()"></a>
					</div>
				</div>
			</div>

			<div class="col s6">
				<a href="https://github.com/arnaud33200/akihairsalon" target="_blank"><footer-dev>Developed by</footer-dev>
				<footer-dev>Arnaud.L</footer-dev></a>
			</div>
		</div>
	</div>
<!-- </div> -->

</body>



</html>
