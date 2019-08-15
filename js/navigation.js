function scrollToTopPage() {
	scrollToPosition(0);
}

function scrollToAbout() {
	scrollToSection("about-section");
}

function scrollToPrice() {
	scrollToSection("price-section");
}

function scrollToHours() {
	scrollToSection("hours-section");
}

function scrollToLocation() {
	scrollToSection("location-section");
}

function scrollToContact() {
	scrollToSection("contact-section");
}

// -----------------------------

function scrollToSection(sectionName) {
	var topPosition = $("#"+sectionName).position().top - 75;
	scrollToPosition(topPosition);
}

function scrollToPosition(position) {
	// window.scrollTo(0, position);
	$("html, body").animate({ scrollTop: position }, 500);
}

// -----------------------------

function openInstagram() { openUrl('https://www.instagram.com/akihairstylist'); }
function openFacebook() { openUrl('https://www.facebook.com/akiimamurahairstylist/'); }
function openBookeo() { openUrl('http://bookeo.com/akiimamura'); }
function openKamiya() { openUrl('http://kamiyahairdressing.ca'); }

function openUrl(url) {
	var win = window.open(url, '_blank');
	win.focus();
}
