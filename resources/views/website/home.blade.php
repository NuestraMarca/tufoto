@extends('website.layout')

@section('breadcrumbs')
	<h1 style="font-size: 1em; font-style: normal; font-weight: 100; margin-top: 20px;">
		tufoto - Fotografía Profesional especializada en Matrimonios, Bodas y Familias
	</h1>
@endsection

@section('content')
	<section id="main-slide">
		@foreach($slides as $slide)
			<figure class="main-image-slide" itemscope itemtype="http://schema.org/ImageObject">
				<img src="/{{ $slide }}" itemprop="contentUrl" 
				title="Nuestras mejores Fotografías de Matrimonios y Bodas" 
				alt="Fotografías Profesionales realziadas de Bodas y Matrimonios en tufoto">
			</figure>
		@endforeach
	</section>

	<h2 class="section-title home-title" style="margin-top:0.4em; font-size:2.2em;">Amor por la fotografía y por lo que hacemos</h2>
	<p class="section-description home-description">
		Nos encanta hacer fotografías para matrimonios y al disfrutar lo que hacemos, 
		damos mucho más que nuestro 100% en cada boda. Tenemos la oportunidad de hacer grandes amigos, y aprender 
		lo mejor de cada relación. 
	</p><br>
	<p class="section-description home-description">
		Sabemos lo importante que es este día, tal vez el más importante de nuestras vidas. 
		Por esto trabajamos de forma profesional, para que cada detalle sea perfecto y tu única preocupación
		sea disfrutar de este gran momento al máximo. 
	</p><br>
	<h3 style="color:#00ADF4; font-size:1.6em; margin: 0.5em 3%;">* Te acompañamos desde el maquillaje hasta el final</h3>
	<p class="section-description home-description">
		Cada detalle de esta fecha es muy especial, por esto te acompañamos desde el momento del maquillaje de tu boda,
		logrando capturar todos los recuerdos, para que luego los puedas revivir en cualquier momento.
	</p>

	<section class="cover-gallery simple-gallery">
		<figure class="cover-photo">
			<img src="/images/maquillaje-novia-matrimonios-bodas.jpg"
			alt="Fotografía del maquillaje de la novia de matrimonios y bodas en Villavicencio">
			<span class="tag-image">Preparacion</span>
		</figure>
		<figure class="cover-photo">
			<img src="/images/foto-ceremonia-boda-matrimonio.jpg"
			alt="Fotografía ceremonía de matrimonios y bodas en Villavicencio">
			<span class="tag-image">Ceremonia</span>
		</figure>
		<figure class="cover-photo">
			<img src="/images/hora-loca-fiesta-matrimonio-boda.jpg"
			alt="Fotografía de la fiesta y la hora loca de matrimonios y bodas en Villavicencio">
			<span class="tag-image">Recepción</span>
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

	<h3 style="color:#00ADF4; font-size:1.6em; margin: 0.5em 3%;">* Siempre entregamos todo el archivo</h3>
	<p class="section-description home-description">
		Las fotografías son tuyas, por eso te entregamos todo el archivo en forma digital 
		para que no pierdas ningún detalle de tu Boda. Son en promedio 800 a 1000 fotografías, además te 
		entregamos las fotografías impresas que elijas según el Plan que escojas con nosotros. 
		<a href="/tarifas">Puedes conocer nuestras tarifas y resolver todas tus dudas aquí.</a>
	</p>
	<img src="/images/archivo-fotos-matrimonios-bodas-tufotoco.png" 
		style="width: 94%; margin: 0.8em 3%;"
		alt="Fotografías de matrimonios y bodas en Villavicencio">



	@section('extra-js')
		<script type="text/javascript">
		
		$( document ).ready(function() {

			$("#main-slide > figure:gt(0)").hide();

			setInterval(function() { 
				$('#main-slide > figure:first')
				.fadeOut(1000)
				.next()
				.fadeIn(1000)
				.end()
				.appendTo('#main-slide');
			},  3000);
		});

		</script>
	@endsection
@endsection