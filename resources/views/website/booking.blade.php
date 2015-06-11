@extends('website.layout')

@section('content')
	<div class="section-bordered booking">
		<section class="form-booking">
			<h1>Reserva tu cita con nosotros</h1>
			
			<p>
				Rellena este formulario y nos pondremos en contacto contigo en breve.
				Todos los datos que envíes serán tratados de forma confidencial.
			</p>

			{!! Form::open(['url' => 'reservas/reservar', 'method' => 'POST']) !!}

				{!! Form::text('name', null, ['placeholder' => 'Nombre y Apellido']) !!} 

				{!! Form::email('eamil', null, ['placeholder' => 'Correo electronico']) !!}

				{!! Form::text('cel', null, ['placeholder' => 'Celular']) !!}

				{!! Form::text('date', null, ['placeholder' => 'Fecha', 'id' => 'date']) !!}

				{!! Form::textarea('comments', null, ['placeholder' => 'Comentarios']) !!}

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
		$(function() {
			$( "#date" ).datepicker();
		});
	</script>
@endsection