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

	<script type="text/javascript" src="js/jquery-2.1.1.min.js" async></script>
	<script type="text/javascript" src="js/materialize.js" async></script>

	<script type="text/javascript" src="js/main.js" async></script>
	<script type="text/javascript" src="js/navigation.js" async></script>
	<script type="text/javascript" src="js/map.js" async></script>

	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link type="text/css" rel="stylesheet" href="css/style.css"/>

	<!-- PHOTOSWIPE -->
	<!-- <link rel="stylesheet" href="photoswipe/photoswipe.css"> 
	<link rel="stylesheet" href="photoswipe/default-skin/default-skin.css"> 
	<script src="photoswipe/photoswipe.min.js"></script> 
	<script src="photoswipe/photoswipe-ui-default.min.js"></script>  -->

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

<nav id="top-navigation-bar" style="position: fixed; z-index: 1000; display: none;">
	<div class="nav-wrapper blue-grey darken-3">
		<!-- <div class="nav-wrapper yellow lighten-3 "> -->
		<a onclick="scrollToTopPage()" class="brand-logo right white-text" style="font-family: 'myFont';font-size: 40px; right: 1.5rem;">Aki Imamura</a>

		<div id="desktop-menu-buttons">
			<ul id="nav-mobile" class="left">
				<li><a class="white-text" onclick="scrollToAbout()">About</a></li>
				<li><a class="white-text" onclick="scrollToPrice()">Prices</a></li>
				<li><a class="white-text" onclick="scrollToHours()">Hours</a></li>
				<li><a class="white-text" onclick="scrollToLocation()">Location</a></li>
				<li><a class="white-text" onclick="scrollToContact()">Contact</a></li>
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

<!-- Side Out Menu -->

<ul id="slide-out" class="side-nav blue-grey darken-2" style="">
	<!-- <ul id="slide-out" class="side-nav yellow lighten-2" style=""> -->
	<li style="margin-top: 60px;">
		<a class="waves-effect white-text" onclick="scrollToAbout()">About</a>
	</li>
	
	<li><a class="waves-effect white-text" onclick="scrollToPrice()">Prices</a></li>
	<li><a class="waves-effect white-text" onclick="scrollToHours()">Hours</a></li>
	<li><a class="waves-effect white-text" onclick="scrollToLocation()">Location</a></li>
	<li><a class="waves-effect white-text" onclick="scrollToContact()">Contact</a></li>
	<li><div class="divider"></div></li>
	<li><a class="waves-effect white-text" onclick="openBookeo()">Online Booking</a></li>
	<li><a class="waves-effect white-text" onclick="openFacebook()">Facebook</a></li>
	<li><a class="waves-effect white-text" onclick="openInstagram()">Instagram</a></li>
</ul>

<a href="#" data-activates="slide-out" class="black-text button-collapse"></a>

<div class="row" style="padding-top: 40px;"><div class="col s12 m8 offset-m2">

	<!-- <div style> -->
	<!-- </div> -->

	<h1 id="main-title" style="font-family: 'myfont';text-align: center;font-size: 100px;">Aki Imamura</h1>

	<div style="text-align: center;">
		<div class="social-icn-group">
			<a class="icn-social bookeo" target="_blank" onclick="openBookeo()"></a>
			<a class="icn-social facebook" target="_blank" onclick="openFacebook()"></a>
			<a class="icn-social instagram" target="_blank" onclick="openInstagram()"></a>
		</div>
	</div>

	<div style="text-align: center;">
		<div class="social-icn-group">
		<a class="waves-effect waves-light btn grey-text text-darken-3 white" style="border: 1px solid #424242;" onclick="openBookeo()">BOOK ONLINE</a>
		</div>
	</div>

	

	<!-- BUTTON FOR SECTION NAVIGATION -->

	<div class="row" style="max-width: 450px;">
		<div class="col s6" align="center" style="margin-bottom: 10px; text-align: center;">
			<a class="waves-effect waves-light btn  grey-text text-darken-3 lime accent-2" onclick="scrollToAbout()" style="width: 100%;">About</a>
			<!-- <a class="waves-effect waves-light btn  grey darken-1" onclick="scrollToAbout()" style="width: 100%;">About</a> -->
		</div>
		
		<div class="col s6" align="center" style="margin-bottom: 10px; text-align: center;">
			<a class="waves-effect waves-light btn  grey-text text-darken-3 lime accent-2" onclick="scrollToPrice()" style="width: 100%;">Prices</a>
			<!-- <a class="waves-effect waves-light btn  grey darken-1" onclick="scrollToPrice()" style="width: 100%;">Price</a> -->
		</div>
		<div class="col s6" align="center" style="margin-bottom: 10px; text-align: center;">
			<a class="waves-effect waves-light btn  grey-text text-darken-3 lime accent-2" onclick="scrollToHours()" style="width: 100%;">Hours</a>
			<!-- <a class="waves-effect waves-light btn  grey darken-1" onclick="scrollToHours()" style="width: 100%;">Hours</a> -->
		</div>
		<div class="col s6" align="center" style="margin-bottom: 10px; text-align: center;">
			<a class="waves-effect waves-light btn  grey-text text-darken-3 lime accent-2" onclick="scrollToLocation()" style="width: 100%;">Location</a>
			<!-- <a class="waves-effect waves-light btn  grey darken-1" onclick="scrollToLocation()" style="width: 100%;">Location</a> -->
		</div>
		<!-- <div class="col s6 offset-s3" align="center" style="margin-bottom: 10px; text-align: center;">
			<a class="waves-effect waves-light btn  grey-text text-darken-3 lime accent-2" onclick="scrollToContact()" style="width: 100%;">Contact</a>
		</div> -->
	</div>

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

			<p>She came to Toronto to expand her repertoire of styles and to bring her own creative style to Canada. After a few years of working in a salon in Toronto, she decided to venture out and start her own business. She prides herself on providing a specialized cut for each client and cares immensely about the details and textures of her cuts, and it shows! Her focus is on having all her customers look their best. She thanks all her past clients for their business and is always open to receiving new ones.</p>

			<ul>
				<li style="list-style-type: circle;">Bookeo: <a href="https://www-1555b.bookeo.com/bookeo/b_akiimamura_start.html?ctlsrc=1504993502528&src=02h">Online Booking</a></li>
				<li style="list-style-type: circle;">Facebook: <a href="https://www.facebook.com/akiimamurahairstylist">@akiimamurahairstylist</a></li>
				<li style="list-style-type: circle;">Instagram: <a href="https://www.instagram.com/akihairstylist/">@akihairstylist</a></li>
			</ul>

		</div>

		<div class="col m4 s12" style="text-align: center">

			<div class="z-depth-2" style="width:100%; height:200px; display: inline-block; background-image: url('images/longProfile2.jpg'); background-repeat: no-repeat; background-attachment: inherit; background-position: center; min-width: 200px;border-radius: 2px;">	
			</div>
		</div>

				<!-- <div class="z-depth-2" style="width:200px; height:200px; display: inline-block;"> 			
				<img src="images/longProfile1.jpg" style="width:100%; height:100%;">
			</div> -->

		</div>

	</div>

	<!-- </div> -->

<!-- 
##### PRICE
##################################################################### 
-->

<div id="price-section" class="divider"></div>
<div class="section">
	<h4>Prices</h4>

	<?php

		// ini_set( 'error_reporting', E_ALL );
		// ini_set( 'display_errors', true );

		include 'php/HairPriceItem.php';

		$categoryArray = HairPriceItem::makeHairPriceItemArray($websiteInfoString);

	?>

	<div class="row">
		<div class="col m6 s12">

			<h5>CUT</h5>
			<table class="price-table">		
				<?php
					$itemArray = $categoryArray["Cut"];
					foreach ($itemArray as $priceItem) {
						echo($priceItem->getStringTableRow());
					}	
				?>
			</table>

			<h5>STYLING</h5>
			<table class="price-table">
				<?php
					$itemArray = $categoryArray["Styling"];
					foreach ($itemArray as $priceItem) {
						echo($priceItem->getStringTableRow());
					}	
				?>
			</table>

		</div>

		<div class="col m6 s12">

			<h5>COLOURING </h5>
			<table class="price-table">
				<?php
					$itemArray = $categoryArray["Colouring"];
					foreach ($itemArray as $priceItem) {
						echo($priceItem->getStringTableRow());
					}	
				?>
			</table>
		</div>
	</div>

	<div align="center">
		<a class="waves-effect waves-light btn grey-text text-darken-3 lime accent-2" style="margin-top: 20px; margin-bottom: 30px;" onclick="openBookeo()">
			See More Price
		</a>

	</div>

		

</div>

<!-- 
##### HOURS 
##################################################################### 
-->

<div id="hours-section" class="divider"></div>
<div class="section">
	<h4>Hours</h4>
	<ul>
		<li style="list-style-type: circle;">Wednesday to Friday (12pm to 8pm)</li>
		<li style="list-style-type: circle;">Saturday (10am to 6pm)</li>
	</ul>
	<p style=" margin-left: 30px; color: #b1b1b1; font-style: italic;">Hours may vary. Please inquire about availability with the stylist.</p>
</div>

<!-- 
##### LOCATION
##################################################################### 
-->

<div id="location-section" class="divider"></div>
<div class="section">
	<h4>Location</h4>

	<div class="row">

		<div class="col push-l7 l5 s12" style="margin-bottom: 40px;">

			<div style="">
				<p>261A Yonge St., Unit 2F (Spellbound Hair)</p>
				<ul>
					<li style="list-style-type: circle;">Located right next to the Ed Mirvish Theatre.</li>
					<li style="list-style-type: circle;">TTC accessible.  Only a short walk from Dundas Station.</li>
					<li style="list-style-type: circle;">Easy access to public parking.</li>
				</ul>
			</div>

			<div align="center">

				<a class="waves-effect waves-light btn grey-text text-darken-3 lime accent-2" onclick="openBookeo()" style="display: inherit;     width: 250px;">
					<!-- <a class="waves-effect waves-light btn grey darken-1 text-white" style="display: inherit;"> -->
					Make Reservation</a>
				</div>
			</div>

			<div id="map" class="col pull-l5 l7 s12" style="height:300px;"></div>

			<!-- INIT MAP SCRIPT AFTER MAP DIV TO AVOID BLANK LOADING ISSUE -->
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMAxQHRREX3zmqNnk5_UFxDomZbgIqpjA&callback=initMap" async defer></script>
		</div>

	</div>

	<!-- 
##### CONTACT
##################################################################### 		
-->

<div id="contact-section" class="divider"></div>
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

	<!-- Modal Structure -->
	<div id="modal1" class="modal modal-fixed-footer">
		<div class="modal-content">
		<h5>Send Message</h5>

			<div class="row">
				<form class="col s12 text-blue" name="message-form" id="message-form">
					<div class="row">
						<div class="input-field col m6 s12">
							<input name="name" id="name" type="text" class="validate">
							<label for="name">Name</label>
						</div>
						<div class="input-field col m6 s12">
							<input name="email" id="email" type="email" class="validate">
							<label for="email">Email*</label>
						</div>
						<div class="input-field col s12">
					      <textarea name="message" id="message" class="materialize-textarea"></textarea>
					      <label for="message">Message*</label>
					    </div>
					</div>
				</form>
			</div>

		</div>
		<div class="modal-footer">
			<a class="modal-action modal-close waves-effect waves-green btn-flat" onclick="sendMessage()">Send</a>
		</div>
	</div>

</div>

<!-- 
########################################################################## 
-->

<div id="Cancellation-policy-section" class="divider"></div>
<div class="section">
	<h4>Cancellation policy</h4>
	<blockquote style="border-left: 5px solid #eeff41;">
		<p>Out of courtesy, all appointments have a minimum 24-hour cancellation policy.</p>
		<p>Customers who are late for their appointment may lose their reservation. Please be on time.</p>
	</blockquote>
</div>

<!-- FOOTTER -->


</div>	

<!-- <div class="row" style="margin-bottom: 0px; opacity: 0.3;"> -->
	<div class="col s12" style="opacity: 0.3;">
		<div id="footer-section" class="divider" style="margin: 40px -10px 10px -10px; height: 2px; background-color: #384750;"></div>
		<div class="row" style="margin-bottom: 0px;">
			
			<div class="col s6">
				<footer-left>Aki Imamura Hairstylist 2017</footer-left>

				<!-- SOCIAL ICONS -->
				<div style="text-align: left;">
					<div class="social-icn-group-footer">
						<a class="icn-social-footer bookeo" target="_blank" onclick="openBookeo()"></a>
						<a class="icn-social-footer facebook" target="_blank" onclick="openFacebook()"></a>
						<a class="icn-social-footer instagram" target="_blank" onclick="openInstagram()"></a>
					</div>
				</div>
			</div>

			<div class="col s6">
				<footer-dev>Designed & Developed by</footer-dev>
				<footer-dev>Arnaud Ladoucette</footer-dev>
			</div>
		</div>
	</div>
<!-- </div> -->

</body>



</html>