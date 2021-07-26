jQuery(window).on('load', function () {

	/* ------------------------------------------------------------------

	 MAIN NAV

	 ------------------------------------------------------------------ */
	jQuery('.nav-slide-button').click(function () {
		jQuery('.pull').slideToggle();
	});

});

jQuery(document).ready(function () {

	/* ------------------------------------------------------------------

	 MAIN NAV TRANSFORM ICON

	 ------------------------------------------------------------------ */
	jQuery("#nav-toggle").click(function (e) {
		jQuery(this).toggleClass("active");
		e.preventDefault();
		return false;
	});

});