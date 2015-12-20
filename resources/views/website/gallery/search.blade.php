@extends('website.layout')

@section('webPageScope') itemscope itemtype="http://schema.org/SearchResultsPage" @endsection

@section('content')
	<section class="cover-gallery" >
		@foreach($galleries as $gallery)
			<a href=" {{ $gallery->complete_url }}">
				<figure class="cover-photo">
					<img src="/{{ $gallery->cover_image }}" alt="{{ $gallery->alt }}"></img>
					<h2 class="cover-text">{{ $gallery->title }}</h2>
				</figure>
			</a>
		@endforeach
	</section>
	
@endsection