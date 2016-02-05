@extends('website.layout')

@section('title')
	{{ $provider->name }} | {{ $provider->type->name }} para tu Matrimonio
@endsection

@section('description')
	{{ $provider->name }} | {{ $provider->type->name }} en Villavicencio que 
	recomendamos para tu Matrimonio (Boda y Preboda) - Directorio de Proveedores tufoto
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('provider', $provider) !!}
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

	<section id="gallery-detail" itemscope itemtype="http://schema.org/Organization">
		<h1> {{ $provider->type->name }}</h1>
		<h2 itemprop="name"> {{ $provider->name }}</h2>
		<div class="fb-like" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>
		<article>
			<p class="tel" itemprop="telephone"> {{ $provider->tel }} </p>
			<p class="address" itemprop="address"> {!! $provider->address !!} </p>
			{!! $provider->links !!}
		</article>
		<section class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
			@foreach($provider->photos as $photo)
				<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
					<a onclick="ga('send', 'event', 'provider-{{ $provider->complete_url }}', 'click-image', '{{ $photo }}');"
						href="/{{ $photo }}" itemprop="contentUrl" data-size="1200x800">
						<img src="/{{ $photo }}" itemprop="thumbnail" title="{{ $provider->title_img }}" alt="{{ $provider->alt }}">
					</a>
					<figcaption itemprop="caption description">Proveedores tufoto para tu Matrimonio - {{ $provider->type->name }} - {{ $provider->name }} - (Bodas y Prebodas) </figcaption>
				</figure>
			@endforeach
		</section>

		<div class="fb-comments" data-width="1200" style="margin: 1em 2.5%;"></div>

		@include('_partials.photoswipe')
	</section>
@endsection