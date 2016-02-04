<!DOCTYPE html>
<html lang="es" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml" @yield('webPageScope', 'itemscope itemtype="http://schema.org/WebSite"')>
	<head>
		<meta charset="UTF-8">
		<title>@yield('title', 'Fotografía Profesional para Matrimonios (Bodas y Prebodas)')</title>
				
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="@yield('description', 'tufoto - Somos un equipo de Fotografía Profesional que amamos nuestro trabajo. Nos encanta hacer fotografías para Bodas')">
		<meta name="keywords" content="@yield('keywords', 'fotografía de matrimonios, fotografía de bodas, fotografía profesional, fotografos, fotos')">
		<meta name="author" content="Equipo de tufoto">
		<meta name="twitter:site" content="@tufotoco"/>
		<meta name="facebook:site" content="@tufoto.co"/>
 		<meta property="article:publisher" content="https://www.facebook.com/tufotoco"/>
 		<meta name="csrf-token" content="{{ csrf_token() }}">

 		<link rel="alternate" hreflang="es-co" href="/"> 
 		<link rel="stylesheet" type="text/css" href="/css/website/landing.min.css">
 		@yield('extra-css')	

		<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','//connect.facebook.net/en_US/fbevents.js');

		fbq('init', '346682378835818');
		fbq('track', "PageView");</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=346682378835818&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->
	</head>
	
	<body>
		<script type="application/ld+json">
			{
			  "@context" : "http://schema.org",
			  "@type" : "Organization",
			  "name" : "tuFoto",
			  "url" : "https://www.tufoto.co",
			  "sameAs" : [
			    "https://twitter.com/tufotoco",
			    "https://instagram.com/tufoto.co/",
			    "https://www.facebook.com/tufoto.co",
			    "https://plus.google.com/+TufotoC"
			 ]
			}
		</script> 
		
		<div id="main" lang="es">
			<header>
				<figure id="header-logo"><a href="/" hreflang="es-co" itemprop="url"><img src="/images/logo_tufoto_co.gif" alt="Logo tufoto - Fotografía Profesional para Bodas y Matrimonios"></a></figure>
				<p id="slogan"><span>Fotografía</span> para toda la vida</p>
				<div class="number-whatsapp hidden-mobile">
					<img src="/images/whatsapp.png" alt="Escríbenos por WhtasApp a tufoto">
					<a  href="#" onclick="goog_report_conversion('tel:+573105518362')" class="number-telephone">310 551 8362</a>
				</div>
			</header>

			<section id="container" itemprop="mainContentOfPage">
				@yield('content')
			</section>
		</div>

		<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  		<script src="/js/website.min.js"></script>
  		<script src="/js/landing/AppLanding.js"></script>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-71622518-1', 'auto');
		  ga('send', 'pageview');

		</script>

		<!-- Google Code for Clics en número de WhatsApp Landing Bodas Conversion Page
		In your html page, add the snippet and call
		goog_report_conversion when someone clicks on the
		phone number link or button. -->
		<script type="text/javascript">
		  /* <![CDATA[ */
		  goog_snippet_vars = function() {
		    var w = window;
		    w.google_conversion_id = 948642113;
		    w.google_conversion_label = "wJRjCKa02GMQwcKsxAM";
		    w.google_remarketing_only = false;
		  }
		  // DO NOT CHANGE THE CODE BELOW.
		  goog_report_conversion = function(url) {
		    goog_snippet_vars();
		    window.google_conversion_format = "3";
		    var opt = new Object();
		    opt.onload_callback = function() {
		    if (typeof(url) != 'undefined') {
		      window.location = url;
		    }
		  }
		  var conv_handler = window['google_trackConversion'];
		  if (typeof(conv_handler) == 'function') {
		    conv_handler(opt);
		  }
		}
		/* ]]> */
		</script>

		<script type="text/javascript"
		  src="//www.googleadservices.com/pagead/conversion_async.js">
		</script>

		<script type="text/javascript">
			function setCookie(name, value, days){
			    var date = new Date();
			    date.setTime(date.getTime() + (days*24*60*60*1000)); 
			    var expires = "; expires=" + date.toGMTString();
			    document.cookie = name + "=" + value + expires + ";path=/";
			}
			function getParam(p){
			    var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
			    return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
			}
			var gclid = getParam('gclid');
			if(gclid){
			    var gclsrc = getParam('gclsrc');
			    if(!gclsrc || gclsrc.indexOf('aw') !== -1){
				    setCookie('gclid', gclid, 90);
				}
			}
		</script> 

		<script> 
		  function readCookie(name) { 
		  var n = name + "="; 
		  var cookie = document.cookie.split(';'); 
		  for(var i=0;i < cookie.length;i++) {      
		      var c = cookie[i];      
		      while (c.charAt(0)==' '){c = c.substring(1,c.length);}      
		      if (c.indexOf(n) == 0){return c.substring(n.length,c.length);} 
		  } 
		  return null; 
		  } 

		  window.onload = function() {      
		      document.getElementById('gclid_field').value = 
		  readCookie('gclid'); 
		  } 
		 </script>

		@yield('extra-js')


	</body>
</html>