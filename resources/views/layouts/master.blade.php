<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="pingback" href="{{ asset('xmlrpc.php') }}">
	<title> {{$title ?? ''}}</title>
	<link rel='dns-prefetch' href='s.w.org' />
	<link rel="alternate" type="application/rss+xml" title="Integrio &raquo; Feed" href="{{ asset('feed/index.htm') }}" />
	<link rel="alternate" type="application/rss+xml" title="Integrio &raquo; Comments Feed" href="{{ asset('comments/feed/index.htm') }}" />
	<link rel='stylesheet' id='wp-block-library-css'  href="{{ asset('css/dist/block-library/style.min.css') }}" type='text/css' media='all' /> 
	<link rel='stylesheet' id='font-awesome-css'  href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" type='text/css' media='all' /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' id='font-awesome-css'  href="{{ asset('fonts/fontawesome-free-5.11.2-web/css/fontawesome.min.css') }}" type='text/css' media='all' /> 
	<link rel='stylesheet' id='wc-block-style-css'  href="{{ asset('css/blocks/style.css') }}" type='text/css' media='all' /> 
	<link rel='stylesheet' id='contact-form-7-css'  href="{{ asset('css/styles.css') }}" type='text/css' media='all' /> 
	<link rel='stylesheet' id='rs-plugin-settings-css'  href="{{ asset('css/settings.css?ver=5.4.8.2') }}" type='text/css' media='all' /> 
	<link rel="stylesheet" type="text/css" href="{{ asset('css/wpfc-minified/20cu462w/4d5w.css') }}" media="all"/>
	<style id='rs-plugin-settings-inline-css' type='text/css'>
		#rs-demo-id {}
	</style>
	<link rel='stylesheet' id='woocommerce-layout-css'  href="{{ asset('css/woocommerce-layout.css') }}" type='text/css' media='all' /> 
	<link rel="stylesheet" type="text/css" href="{{ asset('css/wpfc-minified/mbycg0yo/4d5w.css') }}" media="all"/>
	<link rel='stylesheet' id='woocommerce-smallscreen-css'  href="{{ asset('css/woocommerce-smallscreen.css') }}" type='text/css' media='only screen and (max-width: 768px)' />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/wpfc-minified/mbu5gpej/4d5w.css') }}" media="only screen and (max-width: 768px)"/>
	<link rel='stylesheet' id='woocommerce-general-css'  href="{{ asset('css/woocommerce.css') }}" type='text/css' media='all' />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/wpfc-minified/8u6t564x/4d5w.css') }}" media="all"/>
	<style id='woocommerce-inline-inline-css' type='text/css'>
		.woocommerce form .form-row .required { visibility: visible; }
	</style>
	<link rel='stylesheet' id='integrio-default-style-css'  href="{{ asset('css/style.css') }}" type='text/css' media='all' />
	<link rel='stylesheet' id='flaticon-css'  href="{{ asset('fonts/flaticon/flaticon.css') }}" type='text/css' media='all' /> 
	<link rel='stylesheet' id='font-awesome-css'  href="{{ asset('fonts/font-awesome/css/fontawesome.css') }}" type='text/css' media='all' /> 
	<link rel='stylesheet' id='integrio-main-css'  href="{{ asset('css/main.min.css') }}" type='text/css' media='all' />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/css/wpfc-minified/7c8fxj5l/4d5w.css') }}" media="all"/>
	
	<link rel='stylesheet' id='swipebox-css'  href="{{ asset('js/swipebox/css/swipebox.min.css') }}" type='text/css' media='all' />
	<link rel='stylesheet' id='js_composer_front-css'  href="{{ asset('css/js_composer.min.css') }}" type='text/css' media='all' /> 
	<link rel="stylesheet" type="text/css" href="{{ asset('css/wpfc-minified/1pt9s685/4d5w.css') }}" media="all"/>
	<link rel='https://api.w.org/' href="{{ asset('wp-json/index.htm') }}" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{ asset('xmlrpc_938CD9CC.php') }}" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{ asset('wp-includes/wlwmanifest.xml') }}" /> 
	<meta name="generator" content="WordPress 5.2.3" />
	<meta name="generator" content="WooCommerce 3.6.2" />
	<link rel="canonical" href="{{ asset('index.htm') }}" />
	<link rel='shortlink' href="{{ asset('query_3E1073A0') }}" />
	<link rel="alternate" type="application/json+oembed" href="{{ asset('wp-json/oembed/1.0/embed_C2E899CB') }}" />
	<link rel="alternate" type="text/xml+oembed" href="{{ url('public/wp-json/oembed/1.0/embed?url=http%3A%2F%2F%2Fhome-2%2F&#038;format=xml') }}" />
	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Powered by Stillforce - the power of imagination."/>
	<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="{{ url('public/css/vc_lte_ie9.min.css') }}" media="screen"><![endif]-->
	<meta name="generator" content="Powered by Slider Revolution 5.4.8.2 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
	<link rel="icon" href="{{ asset('images/favicon/android-chrome-192x192.png') }}" sizes="192x192" />
	<link rel="icon" href="{{ asset('images/favicon/android-chrome-192x192.png') }}" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon/apple-touch-icon.png') }}{{ url('public/') }}" />
	<meta name="msapplication-TileImage" content="{{ asset('images/favicon/android-chrome-192x192.png') }}" />
	@include('layouts.partials.header-script')
	@include('layouts.partials.header-stylsheet')
	</head>
	<body class="page-template-default page page-id-1319 woocommerce-no-js wpb-js-composer js-comp-ver-5.7 vc_responsive theme-gradient">
		@include('layouts.header')
		@yield('content') 
		@include('layouts.footer')
		@include('layouts.partials.footer-script')
</body>
</html>