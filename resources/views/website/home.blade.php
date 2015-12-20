@extends('website.layout')

@section('breadcrumbs')
	<h1 style="font-size: 1em; font-style: normal; font-weight: 100; margin-top: 20px;">
		tufoto - Fotografía Profesional especializada en Matrimonios, Bodas y Familias
	</h1>
@endsection

@section('content')
	<section id="main-slide">
		@foreach($slides as $slide)
			<figure class="main-image-slide">
				<img src="/{{ $slide }}" alt="Fotografías Profesionales realziadas en tufoto - Fotografía para toda la Vida"></img>
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