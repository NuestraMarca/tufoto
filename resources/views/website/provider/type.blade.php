@extends('website.layout')

@section('content')

	@section('title')
		Nuestra experiencia Fotográfica - Fotografías de {{ $type->name }} | tuFoto.co
	@endsection

	@section('description') @if(empty($type->description)) Conoce nuestro trabajo y experiencia de nuestros clientes. Nos encantan hacer fotografías Profesionales de {{ $type->name }} @else {{ $type->description }} @endif @endsection

	@section('breadcrumbs')
		{!! Breadcrumbs::render('type', $type) !!}
	@endsection

	<section class="cover-gallery">
		<h1 class="section-title title-md">{{ $type->name }} que recomendamos en tufoto</h1>
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