@extends('website.layout')

@section('content')

	@section('title')
		@if(empty($category->seo_title)) Las Mejores Fotografías de {{ $category->title_plural }} realizadas por tufoto
		@else {{ $category->seo_title }} @endif 
	@endsection

	@section('description') 
		@if(empty($category->seo_description)) Conoce nuestro trabajo fotográfico y experiencia de nuestros clientes. Nos apasiona la fotografía Profesional de {{ $category->title_plural }} 
		@else {{ $category->seo_description }} @endif 
	@endsection

	@section('breadcrumbs')
		{!! Breadcrumbs::render('category', $category) !!}
	@endsection

	<section class="cover-gallery">
		<h1 class="section-title title-md">Nuestras fotografías de {{ $category->title_plural }} </h1>
		<p class="section-description">{!! $category->description !!}</p>

		@foreach($category->galleries->sortByDesc('date') as $gallery)
			<a href=" {{ $gallery->complete_url }}">
				<figure class="cover-photo">
					<img src="{{ $gallery->cover_image }}" alt="{{ $gallery->alt }}" title="{{ $gallery->title_img }}">
					<h2 class="cover-text">{{ $gallery->title }}</h2>
					@if($gallery->tag)
						<span class="tag-image"> {{ $gallery->tag }} </span>
					@endif
				</figure>
			</a>
		@endforeach
	</section>
	
@endsection