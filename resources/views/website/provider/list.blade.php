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

		<section class="cover-gallery" style="margin 10px;">
			@foreach($providerTypes as $type)
				@if($type->providers->count() >= 0)
					<div itemscope itemtype="http://schema.org/Organization">
						<a href="{{ $type->complete_url }}" itemprop="url">
							<figure class="cover-photo">
								<div class="content-cover">
									<img src="{{ $type->cover }}" alt="{{ $type->alt }}" itemprop="image">
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