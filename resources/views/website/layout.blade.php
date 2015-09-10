<meta charset="UTF-8">
<html>
	<head>
		<meta charset="UTF-8">
		<title>@yield('title', 'tuFoto.co')</title>
		<meta name="description" content="@yield('description', 'Fotografía para toda la vida')">
		
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="/css/website/normalize.css">
		<link rel="stylesheet" type="text/css" href="/css/website/style.css">
		
		@yield('extra-css')
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:300,400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div id="main">
			<section id="breadcrumbs">
				@yield('breadcrumbs')
			</section>
			<header>
				<figure id="header-logo"><a href="/"><img src="/images/logo_tufoto_co.gif" alt="Logo TuFoto.co"></a></figure>
				<h2 id="title-menu"><span>Fotografía</span> para toda la vida</h2>
				<ul class="social-icons">
					<li><a href="http://www.facebook.com/tufoto.co" class="icon-facebook2" target="_blank"></a></li>
					<li><a href="https://instagram.com/tufoto.co/" class="icon-instagram" target="_blank"></a></li>
					<li><a href="#" class="icon-blogger2"></a></li>
					<li><a href="#" class="icon-pinterest2"></a></li>
				</ul>
				<section id="number-whatsapp">
					<img src="/images/whatsapp.png" id="image-whatsapp">
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
						<li > <hr> </li>
						<li> 
							{!! Form::open(['url' => '/buscar', 'method' => 'GET']) !!}
								@if(isset($search))
									{!! Form::text('search', $search, ['placeholder' => 'Buscar', 'id' => 'search-menu']) !!}
								@else
									{!! Form::text('search', null, ['placeholder' => 'Buscar', 'id' => 'search-menu']) !!}
								@endif
							{!! Form::close() !!}
						</li>
					</ul>
					<div id="icon-menu-responsive">
						<span id="icon-menu" class="icon-angle-double-down"></span><br>Menú
					</div>
				</nav>
			</header>

			<section id="container">
				@yield('content')
			</section>
			<footer>
				<p>Johannes Duque</p>
				<p>Cel: 310 551 8362 - 313 308 4219</p>
				<p>contacto@tufoto.co</p>
			</footer>
		</div>

		<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  		<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
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