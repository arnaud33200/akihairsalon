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

// -----------------------------

function scrollToSection(sectionName) {
	var topPosition = $("#"+sectionName).position().top - 80;
	window.scrollTo(0, topPosition);
}
