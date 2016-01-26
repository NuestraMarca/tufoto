@extends('website.layout')

@section('title')
	Resultado de Busqueda: Fotografías y Proveedores de Bodas
@endsection

@section('description')
	Resultado de Busqueda: Fotografías y Proveedores de Bodas
@endsection

@section('webPageScope') itemscope itemtype="http://schema.org/SearchResultsPage" @endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('search', $search) !!}
@endsection

@section('content')
	@if($galleries->count())
		<section class="cover-gallery" >
		
			<h1 class="section-title title-md" style="text-align:left;">Galerías encontradas</h1>

			@foreach($galleries as $gallery)
				<a href=" {{ $gallery->complete_url }}">
					<figure class="cover-photo">
						<img src="{{ $gallery->cover_image }}" alt="{{ $gallery->alt }}" title="{{ $gallery->title_img }}">
						<h2 class="cover-text">{{ $gallery->title }}</h2>
						<span class="tag-image"> {{ $gallery->title_or_tag }} </span>
					</figure>
				</a>
			@endforeach
		</section>
	@endif

	@if($providers->count())
		<section class="cover-gallery" >
			<h1 class="section-title title-md" style="text-align:left;">Proveedores encontrados</h1>
		
			@foreach($providers as $provider)
				<a href=" {{ $provider->complete_url }}">
					<figure class="cover-photo">
						<img src="{{ $provider->cover_image }}" alt="{{ $provider->alt }}" title="{{ $provider->title_img }}">
						<h2 class="cover-text">{{ $provider->name }}</h2>
						<span class="tag-image"> {{ $provider->type->name }} </span>
					</figure>
				</a>
			@endforeach
		</section>
	@endif

	@if($galleries->count() + $providers->count() == 0)
		<h1 class="section-title title-md" style="text-align:left;">Lo sentimos, no hemos encontrado nada :(</h1>
		<p class="section-description" style="text-align:left;">Intenta con otro tipo de busqueda</p>
	@endif
	
@endsection