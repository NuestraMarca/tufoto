@extends('website.layout')

@section('webPageScope') itemscope itemtype="http://schema.org/ContactPage" @endsection

@section('content')
	<div class="section-bordered booking">
		<section class="form-booking">
			<h1>¿Te gustó nuestro trabajo?</h1>
			
			<p>
				Rellena este formulario y nos pondremos en contacto contigo en breve.
				Todos los datos que envíes serán tratados de forma confidencial.
			</p>


			{!! Form::open(['url' => 'contacto/contactar', 'method' => 'POST']) !!}

				{!! Form::text('name', null, ['placeholder' => 'Nombre y Apellido', 'required']) !!} 
				@include('_partials.error', ['name' => 'name'])

				{!! Form::email('email', null, ['placeholder' => 'Correo electronico', 'required']) !!}
				@include('_partials.error', ['name' => 'email'])

				{!! Form::text('cel', null, ['placeholder' => 'Celular', 'required']) !!}
				@include('_partials.error', ['name' => 'cel'])

				{!! Form::text('date', null, ['placeholder' => '¿Cuando te quieres casar?', 'id' => 'date', 'required']) !!}
				@include('_partials.error', ['name' => 'date'])

				{!! Form::textarea('comments', null, ['placeholder' => 'Comentarios', 'required']) !!}
				@include('_partials.error', ['name' => 'comments'])

				{!! Form::submit('Enviar solicitud', ['class' => 'button']) !!}

			{!! Form::close() !!}
			
		</section>	
		<figure id="image-booking">
			<img src="/images/nosotros_tufoto_co.jpg"> 
		</figure>
	</div>

@endsection

@section('extra-js')
	<script>
		$( "#date" ).datepicker({
		  dateFormat: "yy-mm-dd",
		  dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
		  monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayi", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Deciembre" ],
		  monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
		});
	</script>
@endsection