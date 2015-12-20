@extends('website.layout')

@section('title')
	Fotografía para toda la vida | Quienes somos - tuFoto.co
@endsection

@section('webPageScope') itemscope itemtype="http://schema.org/AboutPage" @endsection

@section('description')
	En tuFoto.co tomamos las mejores fotografías para matrimonios, familias, bebes y mascotas
@endsection

@section('extra-css')
	@include('_partials.photoswipe-css')
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
				<figcaption itemprop="caption description">Image caption</figcaption>
			</figure>

			<figure class="we-picture" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
				<a href="/images/we-galleries/Johannes-y-Andrea-2.jpg" itemprop="contentUrl" data-size="1200x800">
					<img src="/images/we-galleries/Johannes-y-Andrea-2.jpg" itemprop="thumbnail" alt="Quienes somos - TuFoto.co">
				</a>
				<figcaption itemprop="caption description">Image caption</figcaption>
			</figure>

			<figure class="we-picture" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
				<a href="/images/we-galleries/Johannes-y-Andrea-3.jpg" itemprop="contentUrl" data-size="1200x800">
					<img src="/images/we-galleries/Johannes-y-Andrea-3.jpg" itemprop="thumbnail" alt="Quienes somos - TuFoto.co">
				</a>
				<figcaption itemprop="caption description">Image caption</figcaption>
			</figure>

			<figure class="we-picture" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
				<a href="/images/we-galleries/Johannes-y-Andrea-4.jpg" itemprop="contentUrl" data-size="1200x800">
					<img src="/images/we-galleries/Johannes-y-Andrea-4.jpg" itemprop="thumbnail" alt="Quienes somos - TuFoto.co">
				</a>
				<figcaption itemprop="caption description">Image caption</figcaption>
			</figure>

			<figure class="we-picture" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
				<a href="/images/we-galleries/Johannes-y-Andrea-4.jpg" itemprop="contentUrl" data-size="1200x800">
					<img src="/images/we-galleries/Johannes-y-Andrea-5.jpg" itemprop="thumbnail" alt="Quienes somos - TuFoto.co">
				</a>
				<figcaption itemprop="caption description">Image caption</figcaption>
			</figure>
		</section>

		<article id="we-description">
			<h1>Johannes y Andrea</h1>
			<p>
				Somos una pareja de esposos enamorados de la fotografía. Estar casados es un punto fundamental a la hora de hacer nuestro trabajo, pues conocemos la necesidad de las parejas; por eso nos gusta escucharlos y conocer los deseos y expectativas sobre su gran día.
			</p>
			<p>	
				Desde 2010 decidimos tomar fotografías para matrimonios y convertirlos en una gran experiencia para nuestros clientes. Cada día buscamos mejorar en todos los sentidos y para lograrlo nos capacitamos frecuentemente al lado de los mejores.
			</p>
			<p>	
				Estamos actualmente ubicados en Villavicencio - Meta. Pero si tu matrimonio es un una ciudad diferente, contamos con la disposición y la facilidad de podernos transportar a cualquier lugar del país.
			</p>
			<p>
				Gracias por elegirnos y darnos el privilegio de acompañarlos en el día más importante de sus vidas.
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

@section('extra-js')
	@include('_partials.photoswipe-js')
@endsection