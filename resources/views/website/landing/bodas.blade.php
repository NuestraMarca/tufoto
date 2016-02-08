@extends('website.landing.layout')

@section('content')
	<h1>Fotografía Profesional para tu Boda</h1>

	<div id="first-action">
		<div class="video-youtube">
			<div id="fb-root"></div>
			<script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-video" data-allowfullscreen="1" data-href="https://www.facebook.com/tufoto.co/videos/2521764337861180/">
				<div class="fb-xfbml-parse-ignore">
					<blockquote cite="https://www.facebook.com/tufoto.co/videos/2521764337861180/">
						<a href="https://www.facebook.com/tufoto.co/videos/2521764337861180/">
							El Mejor Recuerdo para tu Boda - Inolvidable !!
						</a>
						<p>El día más especial de nuestras Vidas debe tener los más Hermosos Recuerdos.. 
							¿Te gustaría esto para tu Boda :) ??  Llámanos al 310 551 8362 o Déjanos 
							tu número y te llamamos enseguida
						</p>
						Posted by <a href="https://www.facebook.com/tufoto.co/">tufoto.co</a> 
						on jueves, 28 de enero de 2016
					</blockquote>
				</div>
			</div>
		</div>
		
		<div class="form-action">
			<h2>Un <b>detalle especial</b> para un momento único</h2>
			<h3>Cotiza aquí la fotografía para tu Boda</h3>
			
			{!! Form::open(['url' => 'contacto', 'method' => 'POST']) !!}
				<input type="hidden" id="gclid_field" name="gclid_field" value="">
				{!! Form::text('name', null, ['placeholder' => 'Nombre y Apellido']) !!} 
				@include('_partials.error', ['name' => 'name'])

				{!! Form::email('email', null, ['placeholder' => 'Correo electronico']) !!}
				@include('_partials.error', ['name' => 'email'])

				{!! Form::text('cel', null, ['placeholder' => 'Celular']) !!}
				@include('_partials.error', ['name' => 'cel'])

				{!! Form::hidden('comments', 'Dese cotización desde la landing page') !!}

				{!! Form::submit('Cotizar ahora', ['class' => 'button', 'onclick' => "goog_report_conversion_2(); ga('send', 'event', 'landing-bodas', 'click-button', 'cotizacion');"]) !!}

			{!! Form::close() !!}
		</div>
	</div>

	<div class="separator">
		<p>Llámanos o escríbenos por whatsApp </p>
		<div class="number-whatsapp">
			<img src="/images/whatsapp.png" alt="Escríbenos por WhtasApp a tufoto">
			<a  href="#" onclick="goog_report_conversion('tel:+573105518362')" class="number-telephone">310 551 8362</a>
		</div>
	</div>

	<section class="gallery">
		<h1>Amor por la fotografía y por las Bodas</h1>
		<h2>Conoce nuestra experiencia fotográfica por todo Colombia</h2>
		
		<div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a onclick="ga('send', 'event', 'landing-bodas', 'click-image', 'image-1');"
					href="/images/fotografia-profesional-de-bodas/joachim-y-diana--boda-en-villavicencio.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/joachim-y-diana--boda-en-villavicencio-300.jpg" itemprop="thumbnail" alt="Fotografías de la Boda de Joachi y Diana, Un sueco y una Colombiana." />
		      	</a>
		    	<figcaption itemprop="caption description">Fotografías de la Boda de Joachi y Diana, Un sueco y una Colombiana</figcaption>                                  
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a onclick="ga('send', 'event', 'landing-bodas', 'click-image', 'image-3');"
					href="/images/fotografia-profesional-de-bodas/fotografia-de-la-boda-de-paulo-y-lucy.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/fotografia-de-la-boda-de-paulo-y-lucy-300.jpg" itemprop="thumbnail" alt="Fotografía de Preboda - Matrimonio de Paulo y Lucy" />
		      	</a>
		    	<figcaption itemprop="caption description">Fotografía de Preboda - Matrimonio de Paulo y Lucy</figcaption>                                  
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a onclick="ga('send', 'event', 'landing-bodas', 'click-image', 'image-3');"
					href="/images/fotografia-profesional-de-bodas/fotografia-de-la-boda-de-daniel-y-tatiana--fiesta-y-hora-loca.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/fotografia-de-la-boda-de-daniel-y-tatiana--fiesta-y-hora-loca-300.jpg" itemprop="thumbnail" alt="Fotografía de la hora loca de daniel y tatiana - Boda en Villavicencio" />
		      	</a>
		    	<figcaption itemprop="caption description">Fotografía de la hora loca de daniel y tatiana - Boda en Villavicencio</figcaption>                                  
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a onclick="ga('send', 'event', 'landing-bodas', 'click-image', 'image-4');"
					href="/images/fotografia-profesional-de-bodas/fotografia-de-anillos-de-matrimonio--bodas-colombia.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/fotografia-de-anillos-de-matrimonio--bodas-colombia-300.jpg" itemprop="thumbnail" alt="Fotografía de Anillos de Matrimonio - Preboda" />
		      	</a>
		    	<figcaption itemprop="caption description">Fotografía de Anillos de Matrimonio - Preboda</figcaption>                                  
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a onclick="ga('send', 'event', 'landing-bodas', 'click-image', 'image-5');"
					href="/images/fotografia-profesional-de-bodas/fotografia-especial-de-bodas-con-luces.jpg" itemprop="contentUrl" data-size="960x640">
		          	<img src="/images/fotografia-profesional-de-bodas/fotografia-especial-de-bodas-con-luces-300.jpg" itemprop="thumbnail" alt="Fotografía especial de Bodas con hermosas luces" />
		      	</a>
		    	<figcaption itemprop="caption description">Fotografía especial de Bodas con hermosas luces</figcaption>                                  
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a onclick="ga('send', 'event', 'landing-bodas', 'click-image', 'image-6');"
					href="/images/fotografia-profesional-de-bodas/fotografia-especial-bodas-en-bote-nocturna.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/fotografia-especial-bodas-en-bote-nocturna-300.jpg" itemprop="thumbnail" alt="Fotografía especial de Bodas en Bote" />
		      	</a>
		    	<figcaption itemprop="caption description">Fotografía especial de Bodas en Bote</figcaption>                                  
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a onclick="ga('send', 'event', 'landing-bodas', 'click-image', 'image-7');"
					href="/images/fotografia-profesional-de-bodas/fotografia-de-la-boda-de-omar-y-edith--villavicencio.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/fotografia-de-la-boda-de-omar-y-edith--villavicencio-300.jpg" itemprop="thumbnail" alt="Fotografía romantica de la Boda de Omar y Edith en Villavicencio" />
		      	</a>
		    	<figcaption itemprop="caption description">Fotografía romantica de la Boda de Omar y Edith en Villavicencio</figcaption>                                  
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a onclick="ga('send', 'event', 'landing-bodas', 'click-image', 'image-8');"
		      		href="/images/fotografia-profesional-de-bodas/fotografia-de-bodas--fiesta-y-hora-loca.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/fotografia-de-bodas--fiesta-y-hora-loca-300.jpg" itemprop="thumbnail" alt="Fotografía de Fiesta de la Boda - Hora Loca" />
		      	</a>
		    	<figcaption itemprop="caption description">Fotografía de Fiesta de la Boda - Hora Loca </figcaption>                                  
		    </figure>
		</div>

	</section>

	<section class="plus">
		<h1>¿Por qué debemos ser los fotografos de tu Boda?</h1>

		<h2><span class="icon-camera"></span> Siempre entregamos TODAS las fotografías</h2>
		<p>Las fotografías de tu Boda son tuyas, por eso te entregamos todo el archivo en forma digital 
			para que no pierdas ningún detalle de tu Boda. Son en promedio 800 a 1000 fotografías o 
			más dependiendo como se comporte el evento.
		</p>

		<h2><span class="icon-man-woman"></span> Te acompañamos desde el maquillaje hasta el final de la hora loca</h2>
		<p>Cada detalle de esta fecha es muy especial, por esto te acompañamos desde el momento del 
			maquillaje de tu boda, hasta el final de la hora loca; logrando capturar todos los recuerdos, 
			para que luego los puedas revivir en cualquier momento.
		</p>
		<div class="my-gallery gallery-features">
			<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a onclick="ga('send', 'event', 'landing-bodas', 'click-image', 'image-9');" 
		      		href="/images/fotografia-profesional-de-bodas/maquillaje-de-la-boda-de-daniel-y-wendy--peluqueria-adn.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/maquillaje-de-la-boda-de-daniel-y-wendy--peluqueria-adn-300.jpg" itemprop="thumbnail" alt="Fotografía especial de Bodas en Bote" />
		      	</a>
		    	<figcaption itemprop="caption description">Maquillaje</figcaption>                                  
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a onclick="ga('send', 'event', 'landing-bodas', 'click-image', 'image-10');" 
		      		href="/images/fotografia-profesional-de-bodas/ceremonia-de-boda--villavicencio-tufoto.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/ceremonia-de-boda--villavicencio-tufoto-300.jpg" itemprop="thumbnail" alt="Fotografía romantica de la Boda de Omar y Edith en Villavicencio" />
		      	</a>
		    	<figcaption itemprop="caption description">Ceremonia</figcaption>                                  
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a onclick="ga('send', 'event', 'landing-bodas', 'click-image', 'image-11');" 
		      		href="/images/fotografia-profesional-de-bodas/hora-loca-boda--oscar-y-helena--villavicencio.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/hora-loca-boda--oscar-y-helena--villavicencio-300.jpg" itemprop="thumbnail" alt="Fotografía de Fiesta de la Boda - Hora Loca" />
		      	</a>
		    	<figcaption itemprop="caption description">Hora loca</figcaption>                                  
		    </figure>
		</div>

		<h2><span class="icon-cool"></span> Preferimos lo natural</h2>
		<p>Capturamos momentos reales, los más hermosos de tu Boda. Lo único que te 
			pediremos es que te diviertas y disfrutes de tu día; del resto nos encargamos nosotros.
		</p>
	</section>

	<div class="separator separator-blue">
		<p>Suíguenos en nuestras redes sociales 
			<a onclick="ga('send', 'event', 'landing-bodas', 'click-button', 'facebook');" href="https://www.facebook.com/tufoto.co/" target="_blank" class="icon-facebook2"></a> 
			<a onclick="ga('send', 'event', 'landing-bodas', 'click-button', 'instagram');" href="https://www.instagram.com/tufoto.co/" target="_blank" class="icon-instagram"></a>
		</p>
	</div>

	<section class="comments" lang="es">
		<h1>¿Tienes dudas?, déjanos tus comentarios aquí</h1>		
		<h2>Escríbenos y te responderemos enseguida</h2>

		{!! Form::open(['url' => 'comentar', 'method' => 'POST', 'lang' => 'es', 'id' => 'form-comment']) !!}
			{!! Form::hidden('post', 1, ['id' => 'post']) !!}
			{!! Form::hidden('gclid_field', '', ['id' => 'gclid_field']) !!}

			{!! Form::text('comment-name', null, ['placeholder' => 'Nombre y Apellido', 'id' => 'name', 'required']) !!} 

			{!! Form::email('comment-email', null, ['placeholder' => 'Correo electronico', 'required', 'id' => 'email']) !!}
			@include('_partials.error', ['name' => 'comment-name'])
			@include('_partials.error', ['name' => 'comment-email'])

			{!! Form::textarea('comment-body', null, ['placeholder' => 'Comentarios...', 'rows' => 4, 'required', 'id' => 'body']) !!}
			@include('_partials.error', ['name' => 'comment-body'])

			{!! Form::submit('Si! Quiero información', ['class' => 'button']) !!}

		{!! Form::close() !!}

		<section class="list-comments">
			<h1>Comentarios sobre el Fotógrafo para tu Boda ...</h1>
			<div id="article-comments">
				@foreach($comments as $comment)
					<article class="comment">
						<span class="letter-comment">{{ $comment->client->first_letter }}</span>
						<div class="text-comment">
							<h2 class="name-comment">{{ $comment->client->name }} <span class="date">{{ $comment->created_at_hummans }}</span></h2>
							<p class="body-comment">{{ $comment->body }}</p>
						</div>
						@foreach($comment->children as $child)
							<article class="comment answer">
								<img src="/images/logo-comentarios-tufoto.png">
								<div class="text-comment">
									<h2 class="name-comment">{{ $comment->client->name }} <span class="date">{{ $comment->created_at_hummans }}</span></h2>
									<p class="body-comment">{{ $comment->body }}</p>
								</div>
							</article>
						@endforeach
					</article>
				@endforeach
			</div>
		</section>

	</section>

	@include('_partials.photoswipe')
@endsection

@section('extra-js')
	<script> AppLanding.init() </script> 

	<!-- Google Code for Formulario de contacto Landing Page Conversion Page
	In your html page, add the snippet and call
	goog_report_conversion when someone clicks on the
	chosen link or button. -->
	<script type="text/javascript">
	  /* <![CDATA[ */
	  goog_snippet_vars_2 = function() {
	    var w = window;
	    w.google_conversion_id = 948642113;
	    w.google_conversion_label = "DRVWCKSC32MQwcKsxAM";
	    w.google_remarketing_only = false;
	  }
	  // DO NOT CHANGE THE CODE BELOW.
	  goog_report_conversion_2 = function(url) {
	  	fbq('track', 'Lead');
	    goog_snippet_vars_2();
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

	<!-- Google Code for Comentario al final de la Landing Bodas Conversion Page
	In your html page, add the snippet and call
	goog_report_conversion when someone clicks on the
	chosen link or button. -->
	<script type="text/javascript">
	  /* <![CDATA[ */
	  goog_snippet_vars_3 = function() {
	    var w = window;
	    w.google_conversion_id = 948642113;
	    w.google_conversion_label = "KkjhCMGH32MQwcKsxAM";
	    w.google_remarketing_only = false;
	  }
	  // DO NOT CHANGE THE CODE BELOW.
	  goog_report_conversion_3 = function(url) {
	    goog_snippet_vars_3();
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