@extends('website.layout')

@section('title')
	Directorio de Proveedores de Bodas en Villavicencio | tufoto
@endsection

@section('description')
	No permitas que falte algo en la organización de tu Boda o Matrimonio. 
	Proveedores de Bodas que recomendamos en tufoto - Organizadores, Vestidos, Fincas y más
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('providerTypes') !!}
@endsection

@section('content')
	<section class="providers">
		<h1 class="section-title title-md" style="margin-bottom:0;">Proveedores de Bodas</h1>
		<h2 style="text-align: center; margin-top: 0; color: black; font-size: 1.24em;">Desde Organizadores y Fincas hasta Shows en la Hora Loca</h2>
		<p class="section-description">
			No permitas que falte algo en tu Matrimonio o Boda, en tufoto te recomendamos <br>
			un gran equipo de profesionales especializados en bodas, que desean trabajar contigo.
		</p>

		<section class="cover-gallery" style="margin 10px;">
			@foreach($providerTypes as $type)
				@if($type->providers->count() > 0)
					<div itemscope itemtype="http://schema.org/Organization">
						<a href="{{ $type->complete_url }}" itemprop="url">
							<figure class="cover-photo">
								<div class="content-cover">
									<img src="{{ $type->cover }}" alt="{{ $type->alt }}" title="{{ $type->title_img }}" itemprop="image">
									<h2 class="cover-text" itemprop="name">{{ $type->name }}</h2>
								</div>
								<p class="cover-description"> {!! $type->description !!} </p>
							</figure>
						</a>
					</div>
				@endif
			@endforeach
		</section>
	</section>
	
@endsection