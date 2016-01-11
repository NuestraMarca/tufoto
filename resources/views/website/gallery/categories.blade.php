@extends('website.layout')

@section('title')
	Galerías Fotográficas de tuFoto.co - Fotografía para toda la Vida
@endsection

@section('description') Guardamos los mejores recuerdos Para toda la Vida. Fotografías de @foreach($categories as $category) {{ $category->title_plural }}, @endforeach y mucho más :) @endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('categories') !!}
@endsection

@section('content')
	<h1 class="section-title title-md">Te presentamos nuestras galerías</h1>
	<p class="section-description">Acá encontrarás lo mejor de nuestro trabajo fotográfico, tus recuerdos!</p>
	
	<section class="cover-gallery">
		@foreach($categories as $category)
			<a href=" {{ $category->complete_url }}">
				<figure class="cover-photo">
					<img src="{{ $category->cover }}" alt="{{ $category->alt }}">
					<h2 class="cover-text">{{ $category->title_plural }}</h2>
					<p class="cover-description"> {!! $category->description !!} </p>
				</figure>
			</a>
		@endforeach
	</section>
	
@endsection