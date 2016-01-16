@extends('website.layout')

@section('content')

	@section('title')
		Nuestra experiencia Fotográfica - Fotografías de {{ $category->title_plural }} | tuFoto.co
	@endsection

	@section('description') @if(empty($category->description)) Conoce nuestro trabajo y experiencia de nuestros clientes. Nos encantan hacer fotografías Profesionales de {{ $category->title_plural }} @else {{ $category->description }} @endif @endsection

	@section('breadcrumbs')
		{!! Breadcrumbs::render('category', $category) !!}
	@endsection

	<section class="cover-gallery">
		<h1 class="section-title title-md">Nuestras fotografías de {{ $category->title_plural }} </h1>
		<p class="section-description">{!! $category->description !!}</p>

		@foreach($category->galleries->sortByDesc('date') as $gallery)
			<a href=" {{ $gallery->complete_url }}">
				<figure class="cover-photo">
					<img src="{{ $gallery->cover_image }}" alt="{{ $gallery->alt }}">
					<h2 class="cover-text">{{ $gallery->title }}</h2>
					@if($gallery->tag)
						<span class="tag-image"> {{ $gallery->tag }} </span>
					@endif
				</figure>
			</a>
		@endforeach
	</section>
	
@endsection