<!DOCTYPE html>
<html lang="es" @yield('webPageScope', 'itemscope itemtype="http://schema.org/WebSite"')>
	<head>
		<meta charset="UTF-8">
		<title>@yield('title', 'tufoto - Fotografía para toda la Vida - Fotografía Profesional')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="@yield('description', 'Somos un equipo de Fotógrafos Profesionales que amamos nuestro trabajo: Hacer de tus recuerdos para toda la Vida. Nos encanta hacer fotos de matrimonios')">
		<meta name="keywords" content="@yield('keywords', 'fotografía, fotos, matrimonios, bodas, familia, mascotas, fotógrafos, fotografía profesional, fotógrafos profesionales, fotografías para matrimonios, fotografías para bodas, fotografías para familias, fotografías para mascotas, fotógrafo matrimonio, empresa fotografía, equipo de fotógrafos,fotos profesionales')">
		<meta name="author" content="Andrés Mauricio Pinzón - Johannes Duque : Equipo de tufoto">

		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.min.css">
		<link rel="stylesheet" type="text/css" href="/css/website/website.min.css">
		
		@yield('extra-css')
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:300,400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div id="main" lang="es">
			<section id="breadcrumbs">
				@yield('breadcrumbs')
			</section>
			<header>
				<figure id="header-logo"><a href="/" itemprop="url"><img src="/images/logo_tufoto_co.gif" alt="Logo tufoto - Fotografía Profesional - Recuerdos para toda la Vida"></a></figure>
				<h2 id="title-menu"><span>Fotografía</span> para toda la vida</h2>
				<ul class="social-icons">
					<li><a href="http://www.facebook.com/tufoto.co" class="icon-facebook2" title="Facebook Oficial de tufoto" target="_blank"></a></li>
					<li><a href="https://instagram.com/tufoto.co/" class="icon-instagram" title="Instagram Oficial de tufoto" target="_blank"></a></li>
					<li><a href="#" class="icon-blogger2"></a></li>
					<li><a href="#" class="icon-pinterest2"></a></li>
				</ul>
				<section id="number-whatsapp">
					<img src="/images/whatsapp.png" id="image-whatsapp" alt="Escríbenos por WhtasApp a tufoto">
					<a  href="tel:+573105518362" id="text-whatsapp">310 551 8362</a>
				</section>
				<nav>
					<ul id="main-menu">
						<li><a class="current-menu"href="/">Inicio</a></li>
						<li><a href="/galerias">Galerias</a></li>
						<li><a href="/producto">Producto</a></li>
						<li><a href="/tarifas">Tarifas y Preguntas</a></li>
						<li><a href="/contacto">Contacto</a></li>
						<li><a href="/nosotros">Quiénes somos</a></li>
						<li><a href="/proveedores">Proveedores</a></li>

						<li > <hr> </li>
						<li itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction"> 
							{!! Form::open(['url' => '/buscar', 'method' => 'GET']) !!}
								<meta itemprop="target" content="http://tufoto.co/buscar?search={query}"/>
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
				<p>Johannes Duque</p>
				<p>Cel: 310 551 8362 - 313 308 4219</p>
				<p>contacto@tufoto.co</p>
			</footer>
		</div>

		<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  		<script src="/js/jquery-ui.min.js"></script>
		<script>
			var count = 0;
			$( "#icon-menu-responsive" ).click(function() {
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
			});
		</script>

		@yield('extra-js')
	</body>
</html>