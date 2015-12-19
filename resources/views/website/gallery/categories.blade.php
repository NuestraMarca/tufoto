@extends('website.layout')

@section('title')
	Galerías de Fotografías | tuFoto.co
@endsection

@section('description')
	Galerias de Fotografías realizadas por tuFoto.co - 
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('categories') !!}
@endsection

@section('content')
	<section class="cover-gallery">
		@foreach($categories as $category)
			<a href=" {{ $category->complete_url }}">
				<figure class="cover-photo">
					<img src="{{ $category->cover }}" alt="{{ $category->alt }}"></img>
					<h2 class="cover-text">{{ $category->title_plural }}</h2>
				</figure>
			</a>
		@endforeach
	</section>
	
@endsection