<!DOCTYPE html>
<html lang="es" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml" @yield('webPageScope', 'itemscope itemtype="http://schema.org/WebSite"')>
	<head>
		<meta charset="UTF-8">
		<title>@yield('title', 'tufoto - Fotografía Profesional para Bodas y Matrimonios')</title>
				
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="@yield('description', 'tufoto - Somos un equipo de Fotografía Profesional que amamos nuestro trabajo. Nos encanta hacer fotografías para Bodas')">
		<meta name="keywords" content="@yield('keywords', 'fotografía de matrimonios, fotografía de bodas, fotografía profesional, fotografos, fotos')">
		<meta name="author" content="Equipo de tufoto">
		<meta name="twitter:site" content="@tufotoco"/>
		<meta name="facebook:site" content="@tufoto.co"/>
 		<meta property="article:publisher" content="https://www.facebook.com/tufotoco"/>

 		<link rel="alternate" hreflang="es-co" href="/"> 
		<link rel="stylesheet" type="text/css" href="/css/website/website.min.css">
			
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

		@yield('extra-css')	
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
			<section id="breadcrumbs">
				@yield('breadcrumbs')
			</section>
			<header>
				<figure id="header-logo"><a href="/" hreflang="es-co" itemprop="url"><img src="/images/logo_tufoto_co.gif" alt="Logo tufoto - Fotografía Profesional para Bodas y Matrimonios"></a></figure>
				<h2 id="title-menu"><span>Fotografía</span> para toda la vida</h2>
				<ul class="social-icons">
					<li><a href="https://www.facebook.com/tufoto.co" class="icon-facebook2" title="Facebook Oficial de tufoto" target="_blank"></a></li>
					<li><a href="https://instagram.com/tufoto.co" class="icon-instagram" title="Instagram Oficial de tufoto" target="_blank"></a></li>
					<!-- <li><a href="#" class="icon-blogger2"></a></li>
					<li><a href="#" class="icon-pinterest2"></a></li> !-->
				</ul>
				<section id="number-whatsapp" class="hidden-mobile">
					<img src="/images/whatsapp.png" id="image-whatsapp" alt="Escríbenos por WhtasApp a tufoto">
					<a  href="tel:+573105518362" onclick="goog_report_conversion('tel:+573105518362')" id="text-whatsapp">310 551 8362</a>
				</section>
				<nav>
					<ul id="main-menu">
						<li class="li-menu"><a class="current-menu" href="/" hreflang="es-co">Inicio</a></li>
						<li class="li-menu"><a href="/galerias" hreflang="es-co">Galerías</a></li>
						<li class="li-menu"><a href="/producto" hreflang="es-co">Producto</a></li>
						<li class="li-menu"><a href="/tarifas" hreflang="es-co">Paquetes y Preguntas</a></li>
						<li class="li-menu"><a href="/contacto" hreflang="es-co">Contacto</a></li>
						<li class="li-menu"><a href="/nosotros" hreflang="es-co">Quiénes somos</a></li>
						<li class="li-menu"><a href="/proveedores" hreflang="es-co">Proveedores</a></li>

						<li > <hr> </li>
						<li itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction"> 
							{!! Form::open(['url' => '/buscar', 'method' => 'GET']) !!}
								<meta itemprop="target" content="https://tufoto.co/buscar?search={query}"/>
								@if(isset($search))
									{!! Form::text('search', $search, ['placeholder' => 'Buscar', 'id' => 'search-menu', 'itemprop' => 'query-input']) !!}
								@else
									{!! Form::text('search', null, ['placeholder' => 'Buscar', 'id' => 'search-menu', 'itemprop' => 'query-input']) !!}
								@endif
							{!! Form::close() !!}
						</li>
					</ul>
					<div id="icon-menu-responsive">
						<span id="icon-menu" class="icon-angle-double-down"></span><br>Menú
					</div>
				</nav>
			</header>

			<section id="container" itemprop="mainContentOfPage">
				@yield('content')
			</section>
			<footer>
				<div class="hidden-mobile">
					<p>Johannes Duque</p>
					<p class="hidden-tablet">•</p>
					<p>Cel: <a href="tel:+573105518362" onclick="goog_report_conversion('tel:+573105518362')">310 551 8362</a> - <a href="tel:+573133084219" onclick="goog_report_conversion('tel:+573133084219')">313 308 4219</p>
					<p class="hidden-tablet">•</p>
					<p>Developer: @andrestntx</p>
				</div>
				
				<section id="number-whatsapp" class="visible-mobile">
					<img src="/images/whatsapp.png" id="image-whatsapp" alt="Escríbenos por WhtasApp a tufoto">
					<a  href="tel:+573105518362" onclick="goog_report_conversion('tel:+573105518362')" id="text-whatsapp">310 551 8362</a>
				</section>
			</footer>
		</div>

		<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  		<script src="/js/website.min.js"></script>
		<script>
			$(document).ready(function(){
 				var count = 0;

			    $(document).click(function(e){

			    	if(e.target.id == 'icon-menu' || e.target.id == 'icon-menu-responsive')
			    	{
			    		if(count % 2 == 0)
						{
							$( "#main-menu" ).removeClass( "close-menu" );
							$( "#main-menu" ).addClass( "open-menu" );
						}
						else
						{
							$( "#main-menu" ).removeClass( "open-menu" );
							$( "#main-menu" ).addClass( "close-menu" );
						}
						count ++;
			    	}
			    	else if(e.target.id != 'main-menu' && $(e.target).attr('class') != 'li-menu')
			    	{
			    		$( "#main-menu" ).removeClass( "open-menu" );
						$( "#main-menu" ).addClass( "close-menu" );	

						count = 0;
			    	}

			    	console.log(e.target);
			   	});
			 
			});

		</script>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-71622518-1', 'auto');
		  ga('send', 'pageview');

		</script>

		<!-- Google Code for Click en el n&uacute;mero de Johannes dentro del sitio Conversion Page
		In your html page, add the snippet and call
		goog_report_conversion when someone clicks on the
		phone number link or button. -->
		<script type="text/javascript">
		  /* <![CDATA[ */
		  goog_snippet_vars = function() {
		    var w = window;
		    w.google_conversion_id = 1009818695;
		    w.google_conversion_label = "FpjQCMb4yWMQx7jC4QM";
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


		@yield('extra-js')
	</body>
</html>