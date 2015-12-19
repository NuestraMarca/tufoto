@extends('website.layout')

@section('title')
	Proveedores de Bodas | tuFoto.co
@endsection

@section('description')
	Proveedores de Bodas en alianza con tuFoto.co
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('providerTypes') !!}
@endsection

@section('content')
	<section class="providers">
		<p class="section-description">
			No permitas que falte algo en tu matrimonio, en tufoto.co te recomendamos <br>
			un gran equipo de profesionales especializados en bodas, que desean trabajar contigo.
		</p>

		@foreach($providerTypes as $type)
			
			@if($type->providers->count() > 0)
				<section class="cover-gallery" style="margin 10px;">
					<h2>{{ $type->name }}</h2>

					@foreach($type->providers as $provider)
						<figure class="cover-photo">
							<a href="{{ $provider->complete_url }}">
								<img src="{{ $provider->cover_image }}"></img>
								<h2 class="cover-text">{{ $provider->name }}</h2>
							</a>
						</figure>
					@endforeach
				</section>
			@endif

		@endforeach
	</section>
	
@endsection