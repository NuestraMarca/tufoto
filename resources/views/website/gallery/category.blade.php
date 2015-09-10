@extends('website.layout')

@section('content')

	@section('title')
		Fotografías de {{ $category->title_plural }} | tuFoto.co
	@endsection

	@section('description')
		{{ $category->description }}
	@endsection

	@section('breadcrumbs')
		{!! Breadcrumbs::render('category', $category) !!}
	@endsection

	<section class="cover-gallery">
		@foreach($category->galleries as $gallery)
			<a href=" {{ $gallery->complete_url }}">
				<figure class="cover-photo">
					<img src="/{{ $gallery->cover_image }}" alt="{{ $gallery->alt }}"></img>
					<h2 class="cover-text">{{ $gallery->title }}</h2>
					@if($gallery->tag)
						<span class="tag-image"> {{ $gallery->tag }} </span>
					@endif
				</figure>
			</a>
		@endforeach
	</section>
	
@endsection