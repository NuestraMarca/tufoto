@extends('website.layout')

@section('title')
	Galerías Fotográficas de tuFoto.co - Fotografía para toda la Vida
@endsection

@section('description') Guardamos los mejores recuerdos Para toda la Vida. Fotografías de @foreach($categories as $category) {{ $category->title_plural }}, @endforeach y mucho más :) @endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('categories') !!}
@endsection

@section('content')
	<section class="cover-gallery">
		@foreach($categories as $category)
			<a href=" {{ $category->complete_url }}">
				<figure class="cover-photo">
					<img src="{{ $category->cover }}" alt="{{ $category->alt }}">
					<h2 class="cover-text">{{ $category->title_plural }}</h2>
				</figure>
			</a>
		@endforeach
	</section>
	
@endsection