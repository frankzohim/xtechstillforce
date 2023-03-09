<script type="text/javascript" src="{{ asset('js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script>
		/* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
		if ( typeof WebFontConfig === "undefined" ) {
			WebFontConfig = new Object();
		}
		/* WGL CUSTOM TYPOGRAPHY FIX */
		WebFontConfig['google'] = {families: ['Open+Sans:400,600,700', 'Muli:900,600,400,700,300,400,500,600,700']};
		/* \ WGL CUSTOM TYPOGRAPHY FIX */
		(function() {
			var wf = document.createElement( 'script' );
			wf.src = 'http://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName( 'script' )[0];
			s.parentNode.insertBefore( wf, s );
		})();
	</script>
	<script type='text/javascript' src="{{ asset('js/jquery/jquery.js') }}"></script>
	<script type='text/javascript' src="{{ asset('js/jquery/jquery-migrate.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('js/jquery-blockui/jquery.blockUI.min.js') }}"></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var wc_add_to_cart_params = {"ajax_url":"{{ asset('admin-ajax.php') }}","wc_ajax_url":"/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"/cart/","is_cart":"","cart_redirect_after_add":"no"};
		/* ]]> */
	</script>
	<script type='text/javascript' src="{{ asset('js/frontend/add-to-cart.min_8E46EF36.js') }}"></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var wpgmza_google_api_status = {"message":"Enqueued","code":"ENQUEUED"};
		/* ]]> */
	</script>
	<script type='text/javascript' src="{{ asset('js/wpgmaps.js') }}"></script>
	<script type='text/javascript' src="{{ asset('js/vendors/woocommerce-add-to-cart_15A0A237.js') }}"></script>
	<script type='text/javascript' src="{{ asset('js/swipebox/js/jquery.swipebox.min_8BCC5C2C.js') }}"></script>
	<script type="text/javascript">
	function setREVStartSize(e){                                 
		try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
			if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})                  
		}catch(d){console.log("Failure at Presize of Slider:"+d)}                       
	};</script>