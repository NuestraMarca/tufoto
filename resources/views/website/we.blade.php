@extends('website.layout')

@section('title')
	Fotografos Profesionales para Bodas y Matrimonios Colombia
@endsection

@section('webPageScope') itemscope itemtype="http://schema.org/AboutPage" @endsection

@section('description')
	En tufoto damos todo nuestro amor por nuestra profesión, La fotografía de Matrimonios, 
	Bodas y Prebodas. Somos Fotografos Profesionales
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('we') !!}
@endsection

@section('content')
	<div class="section-bordered">
		<section id="we-pictures" class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
			
			<figure class="we-picture" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
				<a href="/images/we-galleries/Johannes-y-Andrea-1.jpg" itemprop="contentUrl" data-size="1200x800">
					<img src="/images/we-galleries/Johannes-y-Andrea-1.jpg" itemprop="thumbnail" alt="Quienes somos - TuFoto.co">
				</a>
				<figcaption itemprop="caption description">Johannes y Andrea - Fotografos de Bodas en Colombia</figcaption>
			</figure>

			<figure class="we-picture" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
				<a href="/images/we-galleries/Johannes-y-Andrea-2.jpg" itemprop="contentUrl" data-size="1200x800">
					<img src="/images/we-galleries/Johannes-y-Andrea-2.jpg" itemprop="thumbnail" alt="Quienes somos - TuFoto.co">
				</a>
				<figcaption itemprop="caption description">Andrea - Fotografo de Bodas y Matrimonios en Colombia</figcaption>
			</figure>

			<figure class="we-picture" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
				<a href="/images/we-galleries/Johannes-y-Andrea-3.jpg" itemprop="contentUrl" data-size="1200x800">
					<img src="/images/we-galleries/Johannes-y-Andrea-3.jpg" itemprop="thumbnail" alt="Quienes somos - TuFoto.co">
				</a>
				<figcaption itemprop="caption description">Fotografía de Matrimonios, Bodas y Prebodas en Colombia</figcaption>
			</figure>

			<figure class="we-picture" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
				<a href="/images/we-galleries/Johannes-y-Andrea-4.jpg" itemprop="contentUrl" data-size="1200x800">
					<img src="/images/we-galleries/Johannes-y-Andrea-4.jpg" itemprop="thumbnail" alt="Quienes somos - TuFoto.co">
				</a>
				<figcaption itemprop="caption description">Johannes Fotografo de Bodas y Prebodas en Colombia</figcaption>
			</figure>

			<figure class="we-picture" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
				<a href="/images/we-galleries/Johannes-y-Andrea-4.jpg" itemprop="contentUrl" data-size="1200x800">
					<img src="/images/we-galleries/Johannes-y-Andrea-5.jpg" itemprop="thumbnail" alt="Quienes somos - TuFoto.co">
				</a>
				<figcaption itemprop="caption description">Johannes y Andrea - Fotografos de Bodas - Amor por la Fotografía</figcaption>
			</figure>
		</section>

		<article id="we-description">
			<h1 style="margin-bottom: 0;">Johannes y Andrea</h1>
			<h2 style="margin-top: 0; font-size: 0.95em;">Fotografos de Matrimonios (Bodas y Prebodas)</h2>
			<p>
				Somos una pareja de esposos enamorados de la fotografía. Estar casados es un punto fundamental a la hora de hacer nuestro trabajo, pues conocemos la necesidad de las parejas; por eso nos gusta escucharlos y conocer los deseos y expectativas sobre su gran día.
			</p>
			<p>	
				Desde 2010 decidimos tomar fotografías para matrimonios (Bodas y Prebodas) y convertirlos en una gran experiencia para nuestros clientes. Cada día buscamos mejorar en todos los sentidos y para lograrlo nos capacitamos frecuentemente al lado de los mejores.
			</p>
			<p>	
				Estamos actualmente ubicados en Villavicencio - Meta. Pero si tu Boda es en Bogotá o una ciudad diferente, contamos con la disposición y la facilidad viajar a cualquier lugar del país.
			</p>
			<p>
				Gracias por elegirnos y darnos el privilegio de acompañarlos su Boda, en el día más importante de sus vidas.
				<a href="/contacto" title="Reserva la fecha de tu Boda">Dejanos tu Mensaje aquí</a>
			</p>

			<p id="we-contact">
				Johannes Duque Castañeda <br>
				<b> 310 551 8362 - 313 308 4219</b> <br>
				<a href="http://www.facebook.com/tufoto.co">facebook.com/tufoto.co</a> <br>
				<a href="http://instagram.com/tufoto.co">instagram.com/tufoto.co</a>
			</p>
		</article>

		@include('_partials.photoswipe')
	</div>

@endsection
