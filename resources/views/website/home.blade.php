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
				<img src="/{{ $slide }}" itemprop="contentUrl" title="Experiencias Fotográficas de tufoto en Matrimonios, Bodas y los hogares de nuestros Clientes" alt="Fotografías Profesionales realziadas en tufoto - Fotografía para toda la Vida"></img>
				<span itemprop="author" style="font-size:10px;">Johannes Duque - tufoto.co</span>
			</figure>
		@endforeach
	</section>

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