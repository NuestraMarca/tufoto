@extends('website.layout')

@section('breadcrumbs')
	<h1 style="font-size: 1em; font-style: normal; font-weight: 100; margin-top: 20px;">
		Tufoto - Fotografía Profesional para Matrimonios (Bodas y Prebodas)
	</h1>
@endsection

@section('content')

	<!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

    <div id="galleria">
    	@foreach($slides as $slide)
	        <a href="/{{ $slide }}">
	            <img 
	                data-big="/{{ $slide }}"
	                data-title="tufoto.co"
	                data-description="Fotografía para Matrimonios (Bodas y Prebodas) en todo Colombia"
	            >
	        </a>
	    @endforeach
    </div>

	<h2 class="section-title home-title" style="margin-top:0.4em; font-size:2.2em;">Amor por la fotografía y por las Bodas</h2>
	<p class="section-description home-description">
		Nos encanta hacer fotografías para Bodas y al disfrutar lo que hacemos, 
		damos mucho más que nuestro 100% en cada Matrimonio. Tenemos la oportunidad de hacer grandes amigos, y aprender 
		lo mejor de cada relación. 
	</p><br>
	<p class="section-description home-description">
		Sabemos lo importante que es este día, tal vez el más importante de nuestras vidas. 
		Por esto trabajamos de forma profesional, para que cada detalle sea perfecto y tu única preocupación
		sea disfrutar de este gran momento al máximo. 
	</p><br>
	<p class="section-description home-description">
		Somos muy felices compartiendo nuestro trabajo, por esto cada sesión que realizamos la 
		compartimos en nuestra <a href="/galerias/matrimonios" onclick="ga('send', 'event', 'inicio', 'click-link', 'seccion-galerias');" class="color-theme" title="Bodas y Prebodas realizadas por tufoto" target="_blank"> Sección de Galerías </a> y 
		<a href="https://facebook.com/tufoto.co" onclick="ga('send', 'event', 'inicio', 'click-link', 'redes-sociales');" class="color-theme" title="Facebook Oficial de tufoto - Fotografía para Bodas y Prebodas" target="_blank"> Redes Sociales </a>
		:).
		Te invitamos a que entres a <a href="/galerias/matrimonios" onclick="ga('send', 'event', 'inicio', 'click-link', 'nuestras-galerias');" class="color-theme" title="Bodas y Prebodas realizadas por tufoto" target="_blank">
		nuestras galerías</a> y conozcas nuestra experiencia fotográfica de Bodas y Prebodas por todo Colombia. 
	</p>

	<section class="home-landing">
		<div class="video-youtube">
			<iframe width="100%" height="250" src="https://www.youtube.com/embed/9120G_stCTM" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="text-landing">
			<h1>Un momento único</h1>
			<p class="section-description home-description">
				Te mereces un <b>detalle especial</b> para un momento único e inigualable.
				Los recuerdos más hermosos de nuestras vidas deben quedar en manos de
				profesionales.
			</p>
			<a href="/tarifas" class="action-buttom" onclick="ga('send', 'event', 'inicio', 'click-button', 'cotizar-boda');">
				Cotiza la Fotografía de tu Boda
			</a>
			<section id="number-whatsapp" class="hidden-mobile" style="text-align:center;">
				<img src="/images/whatsapp.png" id="image-whatsapp" alt="Escríbenos por WhtasApp a tufoto" style="width:1.6em;">
				<a  href="#" onclick="goog_report_conversion('tel:+573105518362')" id="text-whatsapp" style="font-size:1.85em;">310 551 8362</a>
			</section>
		</div>
	</section>
	
	
	<h3 style="color:#00ADF4; font-size:1.6em; margin: 0.5em 3%;">* Te acompañamos desde el maquillaje hasta el final</h3>
	<p class="section-description home-description">
		Cada detalle de esta fecha es muy especial, por esto te acompañamos desde el momento del maquillaje de tu boda, 
		hasta el final de la hora loca;
		logrando capturar todos los recuerdos, para que luego los puedas revivir en cualquier momento.
	</p>

	<section class="cover-gallery simple-gallery">
		<figure class="cover-photo">
			<img src="/images/maquillaje-novia-matrimonios-bodas.jpg"
			alt="Fotografía del maquillaje de la novia de matrimonios y bodas en Villavicencio">
			<span class="tag-image">Maquillaje</span>
		</figure>
		<figure class="cover-photo">
			<img src="/images/foto-ceremonia-boda-matrimonio.jpg"
			alt="Fotografía ceremonía de matrimonios y bodas en Villavicencio">
			<span class="tag-image">Ceremonia</span>
		</figure>
		<figure class="cover-photo">
			<img src="/images/hora-loca-fiesta-matrimonio-boda.jpg"
			alt="Fotografía de la fiesta y la hora loca de matrimonios y bodas en Villavicencio">
			<span class="tag-image">Fiesta - Hora Loca</span>
		</figure>
	</section>

	<h3 style="color:#00ADF4; font-size:1.6em; margin: 0.5em 3%;">* Preferimos lo natural</h3>
	<p class="section-description home-description">
		En tufoto.co capturamos momentos reales, los más hermosos de tu Boda. Lo único que te pediremos es 
		que te diviertas y disfrutes de tu día; del resto nos encargamos nosotros. 
	</p><br>
	<p class="section-description home-description">
		Preferimos las fotografías con pocos retoques, donde realicemos solo los necesarios. Dando paso a 
		que la luz del día, nuestras cámaras y excelente equipo de fotógrafos se encarguen 
		de que el momento capturado sea el más hermoso posible. 
	</p>
	<img src="/images/foto-natural-boda-matrimonio-tufotoco--villavicencio.jpg" 
		alt="Fotografías naturales sin retoques de matrimonios y bodas en Villavicencio"
		style="width: 90%; margin: 0.8em 5% 0.2em 5%;">

	<h3 style="color:#00ADF4; font-size:1.6em; margin: 0.5em 3%;">* Siempre entregamos TODAS las fotografías</h3>
	<p class="section-description home-description">
		Las fotografías de tu Boda son tuyas, por eso te entregamos todo el archivo en forma digital 
		para que no pierdas ningún detalle de tu Boda. Son en promedio 800 a 1000 fotografías o más 
		dependiendo como se comporte el evento, además te 
		entregamos las fotografías impresas que elijas según el Plan que escojas con nosotros. 
		<a href="/tarifas" onclick="ga('send', 'event', 'inicio', 'click-link', 'conocer-tarifa');" class="color-theme" title="Precios y tarifas de Fotografias para Matrimonios (Bodas y Prebodas)">Puedes conocer nuestras tarifas y resolver todas tus dudas aquí.</a>
	</p>
	<img src="/images/archivo-fotos-matrimonios-bodas-tufotoco.png" 
		style="width: 94%; margin: 0.8em 3%;"
		alt="Fotografías de matrimonios y bodas en Villavicencio">



	@section('extra-js')

		<script>

	    // Load the twelve theme
	    Galleria.loadTheme('/js/gallery/twelve/galleria.twelve.min.js');

	    Galleria.configure({
		    autoplay: 2600,
		    transition: 'fade',
		    transitionSpeed: 2000,
		    fullscreenTransition: 'fade',
		    touchTransition: 'fade'

		});

	    // Initialize Galleria
	    Galleria.run('#galleria');

	    </script>
	@endsection
@endsection