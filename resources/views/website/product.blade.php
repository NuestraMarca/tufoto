@extends('website.layout')

@section('title')
	Los mejores recuerdos para tu matrimonio | Producto de tuFoto.co
@endsection

@section('description')
	Así recibieron Omar y Edith los mejores recuerdos de su matrimonio.
	Fotolibro con estuche de madera, Dvd's con todas las fotografías de su boda, video clips y obsequios adicionales.
@endsection

@section('extra-css')
	@include('_partials.photoswipe-css')
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('product') !!}
@endsection

@section('content')

	<iframe width="100%" height="480" src="https://www.youtube.com/embed/9120G_stCTM" frameborder="0" allowfullscreen></iframe>
	
	<section style="margin-top:15px;" id="gallery-detail" class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
		@foreach($images as $image)

			<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
				<a href="/{{ $image }}" itemprop="contentUrl" data-size="1200x800">
					<img src="/{{ $image }}" itemprop="thumbnail" alt="Productos de fotografía para Matrimonios - TuFoto.co">
				</a>
				<figcaption itemprop="caption description">Productos de fotografía para Matrimonios - TuFoto.co</figcaption>
			</figure>

		@endforeach
	</section>

	@include('_partials.photoswipe')

@endsection

@section('extra-js')
	@include('_partials.photoswipe-js')
@endsection