<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<!-- reason of error: jquery-uiとjqueryの手順が逆。 -->
<!-- error: Uncaught ReferenceError: jQuery is not defined
    at jquery-ui.js:14
    at jquery-ui.js:16 -->
<script src="/HomepageError/js/jquery-ui-1.12.1/jquery-ui.js"></script>
<script src="/HomepageError/js/jquery-2.2.3.min.js"></script>
<!-- Default-JavaScript-File -->
<script src="/HomepageError/js/bootstrap.js"></script>
<!-- Necessary-JavaScript-File-For-Bootstrap -->

<!-- flexSlider (for testimonials) -->
<link rel="stylesheet" href="/HomepageError/css/flexslider.css"
	type="text/css" media="screen" />
<script defer src="/HomepageError/js/jquery.flexslider.js"></script>
<script>
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation : "slide",
				start : function(slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
<!-- //flexSlider (for testimonials) -->
<script src="/HomepageError/js/underscore-min.js"></script>
<script src="/HomepageError/js/jquery.waypoints.min.js"></script>
<script src="/HomepageError/js/jquery.countup.js"></script>
<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<script src="/HomepageError/js/common.js"></script>
<script src="/HomepageError/js/list/list.js"></script>
<script src="/HomepageError/js/login/login.js"></script>
<script src="/HomepageError/js/register/register.js"></script>
<!-- smooth scrolling -->
<script src="/HomepageError/js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->

<!-- move-top -->
<script src="/HomepageError/js/move-top.js"></script>
<!-- easing -->
<script src="/HomepageError/js/easing.js"></script>
<!--  necessary snippets for few javascript files -->
<script src="/HomepageError/js/district.js"></script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
<script src="/HomepageError/js/jquery-1.7.2.js"></script>
<script src="/HomepageError/js/jquery.quicksand.js"></script>
<script src="/HomepageError/js/script.js"></script>
<script src="/HomepageError/js/jquery.prettyPhoto.js"></script>
<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->