@extends('website.layout')

@section('title')
	Fotografías de {{ $gallery->category->title_singular }} - {{ $gallery->title }} | tuFoto.co
@endsection

@section('description')
	{{ $gallery->date }} - {{ $gallery->description }}
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('gallery', $gallery) !!}
@endsection

@section('extra-css')
	@include('_partials.photoswipe-css')
@endsection

@section('content')
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3&appId=203085859878357";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<section id="gallery-detail">
		<h1> {{ $gallery->title_or_tag }}</h1>
		<h2> {{ $gallery->title }}</h2>
		<div class="fb-like" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>
		<article>
			<span id="gallery-date">{{ $gallery->date }}</span> - {{ $gallery->description }}
		</article>
		<section class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
			@foreach($gallery->photos as $photo)
				<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
					<a href="/{{ $photo }}" itemprop="contentUrl" data-size="1200x800">
						<img src="/{{ $photo }}" itemprop="thumbnail" alt="{{ $gallery->date }} - {{ $gallery->title }}"></img>
					</a>
					<figcaption itemprop="caption description">{{ $gallery->date }} - {{$gallery->title_or_tag}} - {{ $gallery->title }} </figcaption>
				</figure>
			@endforeach
		</section>

		<div class="fb-comments" data-width="1200" style="margin: 1em 2.5%;"></div>

		@include('_partials.photoswipe')
	</section>
@endsection

@section('extra-js')
	@include('_partials.photoswipe-js')


@endsection