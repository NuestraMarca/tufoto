@extends('website.layout')

@section('content')

	@section('title')
		{{ $type->name }} en Villavicencio para tu Matrimonio
	@endsection

	@section('description') 
		{{ $type->name }} en Villavicencio que recomendamos para tu Matrimonio
		(Boda y Preboda) | Directorio de Proveedores de Bodas Tufoto
	@endsection

	@section('breadcrumbs')
		{!! Breadcrumbs::render('type', $type) !!}
	@endsection

	<section class="cover-gallery">
		<h1 class="section-title title-md">{{ $type->name }} que recomendamos</h1>
		<p class="section-description">{!! $type->description !!}</p>
		@foreach($type->providers->sortByDesc('date') as $provider)
			<a href=" {{ $provider->complete_url }}">
				<figure class="cover-photo">
					<img src="{{ $provider->cover_image }}" alt="{{ $provider->alt }}">
					<h2 class="cover-text">{{ $provider->name }}</h2>
					@if($provider->tag)
						<span class="tag-image"> {{ $provider->tag }} </span>
					@endif
				</figure>
			</a>
		@endforeach
	</section>
	
@endsection