@extends('website.layout')

@section('webPageScope') itemscope itemtype="http://schema.org/ContactPage" @endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('contact') !!}
@endsection

@section('content')
	<div class="thanks">
		<img src="/images/gracias-tufotoco.png">
		<h1 class="section-title home-title">¡Gracias por escribirnos!</h1>
		<p>Nuestra meta es hacer realidad tu sueño,<br>
			y que tus recuerdos vivan para toda la vida.</p>	
	</div>

@endsection
