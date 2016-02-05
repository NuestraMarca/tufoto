@extends('website.layout')

@section('title')
	Fotografía Profesional de Matrimonios, Bodas, Familias y Mascotas
@endsection

@section('description') Conoce nuestras Galerías. Las mejores fotografías de Bodas, @foreach($categories as $category) {{ $category->title_plural }}, @endforeach y mucho más :) @endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('categories') !!}
@endsection

@section('content')
	<article id="categories">
		<h1 class="section-title title-md">Te presentamos nuestras Fotografías</h1>
		<p class="section-description">Acá encontrarás lo mejor de nuestro trabajo fotográfico, tus mejores recuerdos</p>
		
		<section class="cover-gallery">
			@foreach($categories as $category)
				<a 
					onclick="ga('send', 'event', 'categories', 'click-category', '{{ $category->complete_url }}');"
					href=" {{ $category->complete_url }}" title="Galería Fotográfica de {{ $category->title_plural }} realizadas por tufoto">
					<figure class="cover-photo">
						<div class="content-cover">
							<img src="{{ $category->cover }}" 
								title="Galerías Fotográficas de {{ $category->title_plural }} | Fotografía Profesional"
								alt="Fotografía Profesional para {{ $category->title_plural }}" >
							<h2 class="cover-text">{{ $category->title_plural }}</h2>
						</div>
						<p class="cover-description"> {!! $category->description !!} </p>
					</figure>
				</a>
			@endforeach
		</section>
	</article>
	
@endsection