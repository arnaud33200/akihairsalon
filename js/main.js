window.onload = init;

function init() {
	maxScroll = 0;
	footerHeight = 0;

		$(document).on('scroll', windowScrollEvent);

		window.onresize = function(event) {
			windowResizeEvent();
		};


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
		 windowResizeEvent();


		$('.modal').modal();

		$('.materialboxed').materialbox();

		var option = {shift: 40, dist: -40, onCycleTo: function (ele, dragged) {
				// console.log(ele);
				// console.log($(ele).index()); // the slide's index
				// console.log(dragged);
			}};
		$('.carousel').carousel(option);
	});
}

function closeTopWarningMessage() {
	$("#top_warning_message").fadeOut();
}

function topWarningMessageClickAction() {
	scrollToHours();
	$("#top_warning_message").fadeOut();
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

	maxScroll = document.body.scrollHeight - window.innerHeight;
	footerHeight = document.body.scrollHeight - $('#footer-section').position().top - 40
	windowScrollEvent()
}

function windowScrollEvent() {
	var currentScrollTop = document.body.scrollTop;

	if (currentScrollTop >= $('#about-section').position().top - 150) {
		$("#top-navigation-bar").slideDown();
		$('#scroll-up-button').fadeIn();
	}
	else {
		$("#top-navigation-bar").slideUp();
		$('#scroll-up-button').fadeOut();
	}

	var bottomMargin = 10;
	var footerThresehold = maxScroll - footerHeight - bottomMargin;
	if (currentScrollTop >= footerThresehold) {
		var ratio = (currentScrollTop - footerThresehold) / footerHeight;
		var scrollDiff =  ratio * footerHeight;
		var newMarginBottom = (bottomMargin + scrollDiff) + 'px';
		console.log("ratio = " + ratio + ", new margin = " + newMarginBottom);
		$('#scroll-up-button').css({'bottom':newMarginBottom});
	}
	else {
		$('#scroll-up-button').css({'bottom': bottomMargin + 'px'});
	}
}

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

function galleryClick() {
	debugger;
}

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
