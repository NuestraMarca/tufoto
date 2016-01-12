@extends('website.layout')

@section('breadcrumbs')
	<h1 style="font-size: 1em; font-style: normal; font-weight: 100; margin-top: 20px;">
		tufoto - Fotografía Profesional especializada en Matrimonios, Bodas y Familias
	</h1>
@endsection

@section('content')
	<section id="main-slide">
		@foreach($slides as $slide)
			<figure class="main-image-slide" itemscope itemtype="http://schema.org/ImageObject">
				<img src="/{{ $slide }}" itemprop="contentUrl" title="Experiencias Fotográficas de tufoto en Matrimonios, Bodas y los hogares de nuestros Clientes" alt="Fotografías Profesionales realziadas en tufoto - Fotografía para toda la Vida">
			</figure>
		@endforeach
	</section>

	<h2 class="section-title home-title">Amor por la fotografía y por lo que hacemos</h2>
	<p class="section-description home-description">Nos encanta hacer fotografías para matrimonios y al disfrutar lo que hacemos, 
		damos mucho más que nuestro 100% en cada boda. Tenemos la oportunidad de hacer grandes amigos, y aprender 
		lo mejor de cada relación. Además, cada que estamos en las ceremonias de los diferentes matrimonios a 
		los cuales nos invitan, mentalmente refrescamos nuestros votos matrimoniales y es una 
		linda manera de revivir nuestros recuerdos y aumentar el gran amor que nos une.</p>

	@section('extra-js')
		<script type="text/javascript">
		
		$( document ).ready(function() {

			$("#main-slide > figure:gt(0)").hide();

			setInterval(function() { 
				$('#main-slide > figure:first')
				.fadeOut(1000)
				.next()
				.fadeIn(1000)
				.end()
				.appendTo('#main-slide');
			},  3000);
		});

		</script>
	@endsection
@endsection