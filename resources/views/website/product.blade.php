@extends('website.layout')

@section('title')
	Los mejores recuerdos para tu matrimonio | Producto de tuFoto.co
@endsection

@section('description')
	Así recibieron Omar y Edith los mejores recuerdos de su matrimonio.
	Fotolibro con estuche de madera, Dvd's con todas las fotografías de su boda, video clips y obsequios adicionales.
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('product') !!}
@endsection

@section('content')

	<iframe width="100%" height="80%" src="https://www.youtube.com/embed/9120G_stCTM" frameborder="0" allowfullscreen></iframe>
	
	<section style="margin-top:15px;">
		@foreach($images as $image)
			<img src="{{ $image }}" style="width:100%; margin-bottom: 15px;">
		@endforeach
	</section>

@endsection