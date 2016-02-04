@extends('website.layout')

@section('title')
	Reserva el fotografo para tu Boda a tiempo. Contacto tufoto
@endsection

@section('description')
	Reserva a tiempo el fotografo ideal para tu Boda, no esperes hasta los 
	últimos días y haz tu rervación ahora. Fotografía Profesional para toda la Vida
@endsection

@section('webPageScope') itemscope itemtype="http://schema.org/ContactPage" @endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('contact') !!}
@endsection

@section('content')
	<div class="section-bordered booking">
		<section class="form-booking">
			<h1>¿Te gustó nuestro trabajo?</h1>
			<h2>
				Reserva aquí las Fotografías para tu Boda
			</h2>
			
			<p>
				Escríbenos tus comentarios y nos pondremos en contacto contigo en breve.
				Todos los datos que envíes serán tratados de forma confidencial.
			</p>


			{!! Form::open(['url' => 'contacto', 'method' => 'POST']) !!}
				<input type="hidden" id="gclid_field" name="gclid_field" value="">
				{!! Form::text('name', null, ['placeholder' => 'Nombre y Apellido', 'required']) !!} 
				@include('_partials.error', ['name' => 'name'])

				{!! Form::email('email', null, ['placeholder' => 'Correo electronico', 'required']) !!}
				@include('_partials.error', ['name' => 'email'])

				{!! Form::text('cel', null, ['placeholder' => 'Celular', 'required']) !!}
				@include('_partials.error', ['name' => 'cel'])

				{!! Form::text('date', null, ['placeholder' => '¿Cuando te quieres casar?', 'id' => 'date', 'required']) !!}
				@include('_partials.error', ['name' => 'date'])

				{!! Form::textarea('comments', null, ['placeholder' => 'Comentarios', 'required', 'rows' => '4']) !!}
				@include('_partials.error', ['name' => 'comments'])

				{!! Form::submit('Enviar solicitud', ['class' => 'button', 'onclick' => 'goog_report_conversion_contacto()']) !!}

			{!! Form::close() !!}
			
		</section>	
		<figure id="image-booking" class="hidden-mobile">
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

	<!-- Google Code for Registro de Formulario en Contacto Conversion Page
	In your html page, add the snippet and call
	goog_report_conversion when someone clicks on the
	chosen link or button. -->
	<script type="text/javascript">
	  /* <![CDATA[ */
	  goog_snippet_vars_contacto = function() {
	    var w = window;
	    w.google_conversion_id = 948642113;
	    w.google_conversion_label = "6KLmCJfyzWMQwcKsxAM";
	    w.google_remarketing_only = false;
	  }

	  // DO NOT CHANGE THE CODE BELOW.
	  goog_report_conversion_contacto = function(url) {
	    goog_snippet_vars_contacto();
	    window.google_conversion_format = "3";
	    var opt = new Object();
	    opt.onload_callback = function() {
	    if (typeof(url) != 'undefined') {
	      window.location = url;
	    }
	  }
	  var conv_handler = window['google_trackConversion'];
	  if (typeof(conv_handler) == 'function') {
	    conv_handler(opt);
	  }
	}
	/* ]]> */
	</script>


@endsection