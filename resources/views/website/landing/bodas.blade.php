@extends('website.landing.layout')

@section('extra-css')
	@include('_partials.photoswipe-css')
@endsection

@section('content')
	<h1>Fotografía Profesional para tu Boda</h1>

	<div id="first-action">
		<div class="video-youtube">
			<iframe width="100%" height="310" src="https://www.youtube.com/embed/9120G_stCTM" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div class="form-action">
			<h2>Un <b>detalle especial</b> para un momento único</h2>
			<h3>Cotiza aquí la fotografía para tu Boda</h3>
			
			{!! Form::open(['url' => 'contacto', 'method' => 'POST']) !!}

				{!! Form::text('name', null, ['placeholder' => 'Nombre y Apellido']) !!} 
				@include('_partials.error', ['name' => 'name'])

				{!! Form::email('email', null, ['placeholder' => 'Correo electronico']) !!}
				@include('_partials.error', ['name' => 'email'])

				{!! Form::text('cel', null, ['placeholder' => 'Celular']) !!}
				@include('_partials.error', ['name' => 'cel'])

				{!! Form::hidden('comments', 'Dese cotización desde la landing page') !!}

				{!! Form::submit('Cotizar ahora', ['class' => 'button']) !!}

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
		      	<a href="/images/fotografia-profesional-de-bodas/joachim-y-diana--boda-en-villavicencio.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/joachim-y-diana--boda-en-villavicencio-300.jpg" itemprop="thumbnail" alt="Fotografías de la Boda de Joachi y Diana, Un sueco y una Colombiana." />
		      	</a>
		    	<figcaption itemprop="caption description">Fotografías de la Boda de Joachi y Diana, Un sueco y una Colombiana</figcaption>                                  
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a href="/images/fotografia-profesional-de-bodas/fotografia-de-la-boda-de-paulo-y-lucy.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/fotografia-de-la-boda-de-paulo-y-lucy-300.jpg" itemprop="thumbnail" alt="Fotografía de Preboda - Matrimonio de Paulo y Lucy" />
		      	</a>
		    	<figcaption itemprop="caption description">Fotografía de Preboda - Matrimonio de Paulo y Lucy</figcaption>                                  
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a href="/images/fotografia-profesional-de-bodas/fotografia-de-la-boda-de-daniel-y-tatiana--fiesta-y-hora-loca.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/fotografia-de-la-boda-de-daniel-y-tatiana--fiesta-y-hora-loca-300.jpg" itemprop="thumbnail" alt="Fotografía de la hora loca de daniel y tatiana - Boda en Villavicencio" />
		      	</a>
		    	<figcaption itemprop="caption description">Fotografía de la hora loca de daniel y tatiana - Boda en Villavicencio</figcaption>                                  
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a href="/images/fotografia-profesional-de-bodas/fotografia-de-anillos-de-matrimonio--bodas-colombia.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/fotografia-de-anillos-de-matrimonio--bodas-colombia-300.jpg" itemprop="thumbnail" alt="Fotografía de Anillos de Matrimonio - Preboda" />
		      	</a>
		    	<figcaption itemprop="caption description">Fotografía de Anillos de Matrimonio - Preboda</figcaption>                                  
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a href="/images/fotografia-profesional-de-bodas/fotografia-especial-de-bodas-con-luces.jpg" itemprop="contentUrl" data-size="960x640">
		          	<img src="/images/fotografia-profesional-de-bodas/fotografia-especial-de-bodas-con-luces-300.jpg" itemprop="thumbnail" alt="Fotografía especial de Bodas con hermosas luces" />
		      	</a>
		    	<figcaption itemprop="caption description">Fotografía especial de Bodas con hermosas luces</figcaption>                                  
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a href="/images/fotografia-profesional-de-bodas/fotografia-especial-bodas-en-bote-nocturna.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/fotografia-especial-bodas-en-bote-nocturna-300.jpg" itemprop="thumbnail" alt="Fotografía especial de Bodas en Bote" />
		      	</a>
		    	<figcaption itemprop="caption description">Fotografía especial de Bodas en Bote</figcaption>                                  
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a href="/images/fotografia-profesional-de-bodas/fotografia-de-la-boda-de-omar-y-edith--villavicencio.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/fotografia-de-la-boda-de-omar-y-edith--villavicencio-300.jpg" itemprop="thumbnail" alt="Fotografía romantica de la Boda de Omar y Edith en Villavicencio" />
		      	</a>
		    	<figcaption itemprop="caption description">Fotografía romantica de la Boda de Omar y Edith en Villavicencio</figcaption>                                  
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a href="/images/fotografia-profesional-de-bodas/fotografia-de-bodas--fiesta-y-hora-loca.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/fotografia-de-bodas--fiesta-y-hora-loca-300.jpg" itemprop="thumbnail" alt="Fotografía de Fiesta de la Boda - Hora Loca" />
		      	</a>
		    	<figcaption itemprop="caption description">Fotografía de Fiesta de la Boda - Hora Loca </figcaption>                                  
		    </figure>
		</div>

	</section>

	<section class="plus">
		<h1>Por qué debemos ser los fotografos de tu Boda</h1>

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
		      	<a href="/images/fotografia-profesional-de-bodas/maquillaje-de-la-boda-de-daniel-y-wendy--peluqueria-adn.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/maquillaje-de-la-boda-de-daniel-y-wendy--peluqueria-adn-300.jpg" itemprop="thumbnail" alt="Fotografía especial de Bodas en Bote" />
		      	</a>
		    	<figcaption itemprop="caption description">Maquillaje</figcaption>                                  
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a href="/images/fotografia-profesional-de-bodas/ceremonia-de-boda--villavicencio-tufoto.jpg" itemprop="contentUrl" data-size="1200x800">
		          	<img src="/images/fotografia-profesional-de-bodas/ceremonia-de-boda--villavicencio-tufoto-300.jpg" itemprop="thumbnail" alt="Fotografía romantica de la Boda de Omar y Edith en Villavicencio" />
		      	</a>
		    	<figcaption itemprop="caption description">Ceremonia</figcaption>                                  
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      	<a href="/images/fotografia-profesional-de-bodas/hora-loca-boda--oscar-y-helena--villavicencio.jpg" itemprop="contentUrl" data-size="1200x800">
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
			<a href="https://www.facebook.com/tufoto.co/" target="_blank" class="icon-facebook2"></a> 
			<a href="https://www.instagram.com/tufoto.co/" target="_blank" class="icon-instagram"></a>
		</p>
	</div>

	<section class="comments" lang="es">
		<h1>¿Tienes dudas?, déjanos tus comentarios aquí</h1>		
		<h2>Escríbenos y te responderemos enseguida</h2>

		{!! Form::open(['url' => 'comentar', 'method' => 'POST', 'lang' => 'es']) !!}
			{!! Form::hidden('post', 1) !!}

			{!! Form::text('comment-name', null, ['placeholder' => 'Nombre y Apellido', 'id' => 'name', 'required']) !!} 

			{!! Form::email('comment-email', null, ['placeholder' => 'Correo electronico', 'required']) !!}
			@include('_partials.error', ['name' => 'comment-name'])
			@include('_partials.error', ['name' => 'comment-email'])

			{!! Form::textarea('comment-body', null, ['placeholder' => 'Comentarios...', 'rows' => 4, 'required']) !!}
			@include('_partials.error', ['name' => 'comment-body'])

			{!! Form::submit('Si! Quiero información', ['class' => 'button']) !!}

		{!! Form::close() !!}

		<section class="list-comments">
			<h1>Comentarios sobre el Fotógrafo para tu Boda ...</h1>
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
		</section>

	</section>

	@include('_partials.photoswipe')
@endsection