<script type="text/javascript">
	var c = document.body.className;
	c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
	document.body.className = c;
</script>
<script type="text/javascript">
	function revslider_showDoubleJqueryError(sliderID) {
		var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
		errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
		errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
		errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
		errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
		jQuery(sliderID).show().html(errorMessage);
	}
</script>

<link rel="stylesheet" type="text/css" href="{{ asset('css/wpfc-minified/eeo2csl6/4d6i.css') }}" media="all"/>
<link rel="stylesheet" type="text/css" href="{{ asset('fonts/fontawesome-free-5.11.2-web/js/fontawesome.min.js') }}" media="all"/>
<script type='text/javascript' src="{{ asset('js/underscore.min_31283002.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/backbone.min_E60AF547.js') }}"></script>
<script type='text/javascript'>
	/* <![CDATA[ */
	var wpApiSettings = {
		"root":"{{ asset('wp-json/') }}","nonce":"a189ef7faf","versionString":"wp/v2/"
	};
	/* ]]> */
</script>
<script type='text/javascript' src="{{ asset('js/api-request.min_8BCC5C2C.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/wp-api.min_8BCC5C2C.js') }}"></script>
<script type='text/javascript'>
	/* <![CDATA[ */
	var wpcf7 = {
		"apiSettings":{
			"root":"{{ asset('wp-json/contact-form-7/v1') }}","namespace":"contact-form-7/v1"
		}
	};
	/* ]]> */
</script>
<script type='text/javascript' src="{{ asset('js/scripts_3C24EB76.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/js-cookie/js.cookie.min_A38278A5.js') }}"></script>
<script type='text/javascript'>
	/* <![CDATA[ */
	var woocommerce_params = {
		"ajax_url":"{{ asset('wp-admin/admin-ajax.php","wc_ajax_url') }}":"/?wc-ajax=%%endpoint%%"
	};
	/* ]]> */
</script>
<script type='text/javascript' src="{{ asset('js/frontend/woocommerce.min_8E46EF36.js') }}"></script>
<script type='text/javascript'>
	/* <![CDATA[ */
	var wc_cart_fragments_params = {
		"ajax_url":"{{ asset('wp-admin/admin-ajax.php') }}","wc_ajax_url":"/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_17677cf2227aa187472f3761ea7361c4","fragment_name":"wc_fragments_17677cf2227aa187472f3761ea7361c4","request_timeout":"5000"
	};
	/* ]]> */
</script>
<script type='text/javascript' src="{{ asset('js/frontend/cart-fragments.min_8E46EF36.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/theme-addons.min.js') }}"></script>
<script type='text/javascript'>
	/* <![CDATA[ */
	var wgl_core = {
		"ajaxurl":"{{ asset('admin-ajax.php') }}","slickSlider":"{{ asset('js/slick.min.js') }}","JarallaxPlugin":"{{ asset('js/jarallax-video.min.js') }}","JarallaxPluginVideo":"{{ asset('public/js/jarallax.min.js') }}","like":"Like","unlike":"Unlike"
	};
	/* ]]> */
</script>
<script type='text/javascript' src="{{ asset('js/theme.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/wp-embed.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/dist/js_composer_front.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.appear.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/slick.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.paroller.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/imagesloaded.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/dist/isotope.pkgd.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/dist/skrollr.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/waypoints.min.js') }}"></script>
<script type="text/javascript" id="wgl_custom_footer_js"></script>

