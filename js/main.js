window.onload = init;

function init() {		

		$(document).on('scroll', windowScrollEvent);

		window.onresize = function(event) {
			windowResizeEvent();
		};
		windowResizeEvent();

	 // Initialize collapse button
	 $('.button-collapse').sideNav({
	      menuWidth: 150, // Default is 300
	      edge: 'left', // Choose the horizontal origin
	      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
	      draggable: false // Choose whether you can drag to open on touch screens
	  });

	 $("#menu-button").click(function() {
	 	$('.button-collapse').sideNav('show');
	 });

	 $(document).ready(function() {
		$('.modal').modal();
		// onCycleTo: function (ele, dragged) {
		// 		console.log(ele);
		// 		console.log($(ele).index()); // the slide's index
		// 		console.log(dragged);
		// 	}
		var option = {shift: 40, dist: -40};
		$('.carousel').carousel(option);
	});
}

function windowResizeEvent() {

// display or hide the mobile side bar
	if ($(window).width() < 600) {
		$("#desktop-menu-buttons").hide();
		$("#mobile-menu-buttons").show();
	} else {
		$("#desktop-menu-buttons").show();
		$("#mobile-menu-buttons").hide();
	}

	// adjust the font of main title
	if ($(window).width() < 470) {
		$("#main-title").css('font-size', '70px');
	} else {
		$("#main-title").css('font-size', '100px');
	}
}

function windowScrollEvent() {
	if ($(this).scrollTop() >= $('#about-section').position().top - 150) {
		$("#top-navigation-bar").slideDown();
		$('#scroll-up-button').fadeIn();
	} 
	else {
		$("#top-navigation-bar").slideUp();
		$('#scroll-up-button').fadeOut();
	}

	// var msg = "scrollTop = " + $(this).scrollTop() + " / footer = " + $('#footer-section').position().top + "doc = " + $(window).width();
	// console.log(msg)

	var gap = 560;
	if ($(document).width() >= 1250) { gap = 641 }

	if ($(this).scrollTop() >= $('#footer-section').position().top - gap) {
		// var scrollDiff =  $(this).scrollTop() - $('#footer-section').position().top;
		var scrollDiff =  $(this).scrollTop() - $('#footer-section').position().top + gap;

		var newMarginBottom = (10 + scrollDiff) + 'px';
		$('#scroll-up-button').css({'bottom':newMarginBottom});
	}
	else {
		$('#scroll-up-button').css({'bottom':'10px'});	
	}
}

function openPhotoSwipe() {
    var pswpElement = document.querySelectorAll('.pswp')[0];

    // build items array
    var items = [
        { src: 'https://farm2.staticflickr.com/1043/5186867718_06b2e9e551_b.jpg', w: 964, h: 1024 },
        { src: 'https://farm7.staticflickr.com/6175/6176698785_7dee72237e_b.jpg', w: 1024, h: 683 }
    ];
    
    var options = {
        history: false, focus: false,
        showAnimationDuration: 0,
        hideAnimationDuration: 0
    };
    
    var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
    gallery.init();
};

function sendMessage() {

	if (checkMessageIsNotValide()) {
		return;
	}

	$('#modal1').modal('close');
	Materialize.toast('Your message has been sent.', 4000);

	var message = $('#message').val();	
	if (message == "") {
		// no need to send anything if no message
		resetModalInputFields();
		return;
	}

	var formObject = $("#message-form");
	var values = formObject.serialize();
	$.ajax({
	    url: "php/MailContact.php", type: "post", data: values ,
	    success: function (response) {
	      var taux = 10000;
	      
	    },
	    error: function(jqXHR, textStatus, errorThrown) {
	       console.log(textStatus, errorThrown);
	       debugger;
	    }
	});

	resetModalInputFields();
};

function resetModalInputFields() {
	// reset the field after
	$('#name').val("");
	$('#email').val("");
	$('#email').attr("class", "validate");
	$('#message').val("");
	$('#message').attr("class", "materialize-textarea validate");
}

function checkMessageIsNotValide() {
// validate email
	var email = $('#email').val();
	if (isEmail(email) == false) {
		$('#email').attr("class", "validate invalid");
		return true;
	}

	// disable for the moment, there is a display bug
	// var message = $('#message').val();
	// if (message == "") {
	// 	$('#message').attr("class", "materialize-textarea validate invalid");
	// 	return true;
	// }

	return false;
}

function isEmail(email) {
	if (email == "") {
		return false;
	}
  	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  	return regex.test(email);
}
