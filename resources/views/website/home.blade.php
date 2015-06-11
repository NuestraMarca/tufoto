@extends('website.layout')

@section('breadcrumbs')
	{!! Breadcrumbs::render('home') !!}
@endsection

@section('content')
	<section id="main-slide">
		@foreach($slides as $slide)
			<figure class="main-image-slide">
				<img src="/{{ $slide }}" alt="Foto de Portada TuFoto.co"></img>
			</figure>
		@endforeach
	</section>

	@section('extra-js')
		<script type="text/javascript">

			$("#main-slide > figure:gt(0)").hide();

			setInterval(function() { 
				$('#main-slide > figure:first')
				.fadeOut(1000)
				.next()
				.fadeIn(1000)
				.end()
				.appendTo('#main-slide');
			},  3000);

		</script>
	@endsection
@endsection