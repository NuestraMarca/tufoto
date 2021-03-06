@extends('website.layout')

@section('title')
	Precios de fotografías para Matrimonio | tuFoto.co
@endsection

@section('description')
	Conoce los precios de nuestras fotografías para tu matrimonio | tuFoto.co
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('pricing') !!}
@endsection

@section('content')
	
	<section class="plan-options">
		<h1 class="section-title">Precios de Fotografías para Matrimonios</h1>
		<table>
				<colgroup><col>
				<col>
				<col class="highlight">

				</colgroup><thead>
				<tr>
					<th>
						<div class="plan-title">Plata</div>
						<hr>
						<div class="price-graphic">
							<div class="price">
								<span class="currency">$</span>
								<span class="unit">1'800</span>
								<span class="fraction">.000</span>
							</div>
						</div>
						<a class="plans-signup-button webs-ext-btn webs-ext-btn-green" title="RESERVAR" href="/reservas">
							<span class="plan-sign-up" data-sku="STARTER_TWO_YEAR_R1">RESERVAR</span>
						</a>

					</th>
					<th>
						<div class="plan-title">Oro</div>
						<hr>
						<div class="price-graphic">
							<div class="price">
								<span class="currency">$</span>
								<span class="unit">2'200</span>
								<span class="fraction">.000</span>
							</div>
						</div>
						<a class="plans-signup-button webs-ext-btn webs-ext-btn-green" title="RESERVAR" href="/contacto">
							<span class="plan-sign-up" data-sku="ENHANCED_TWO_YEAR_R1">RESERVAR</span>
						</a>
					</th>
					<th class="highlight">
						<div class="plan-title">Diamante</div>
						<hr>
						<div class="price-graphic">
							<div class="price">
								<span class="currency">$</span>
								<span class="unit">2'700</span>
								<span class="fraction">.000</span>
							</div>
						</div>
						<a class="plans-signup-button webs-ext-btn webs-ext-btn-green" title="RESERVAR" href="/contacto">
							<span class="plan-sign-up" data-sku="PRO_TWO_YEAR_R1">RESERVAR</span>
						</a>
					</th>
				</tr>
				</thead>
						<tbody class="entitlements" data-tooltipstyle="external" data-tooltipoffsettop="20" data-tooltipoffsetleft="20">
						<tr class="custom-domain-name highlight" data-tooltip-title="Custom Domain Name" data-tooltip="Get a memorable, professional custom domain name for your site, like www.mybizname.com (or with another extension, like www.mybizname.co.uk).">
							<td data-label="Free">
								USB con todas las fotografías
							</td>
							<td data-label="Free">
								USB con todas las fotografías
							</td>
							<td data-label="Free">
								USB con todas las fotografías
							</td>
						</tr>
						<tr data-tooltip-title="Unlimited Pages" data-tooltip="Have a lot to share? Get unlimited pages for your website.">
							<td>50 fotos impresas 15x20 cm</td>
							<td>Fotolibro 30x30 cm (60 a 80 fotos)</td>
							<td class="highlight">Fotolibro 30x30 cm (60 a 80 fotos)</td>
						</tr>
						<tr data-tooltip-title="Webs Branding Removed" data-tooltip="Premium packages help you look more professional by removing third-party ads from your site. ">
							<td class="x-mark"></td>
							<td>Estuche de cuero</td>
							<td class="highlight">Estuche de madera</td>
						</tr>
						<tr data-tooltip-title="Password Protected Pages" data-tooltip="Share pages and information with community members or colleagues securely. ">
							<td class="x-mark"></td>
							<td class="x-mark"></td>
							<td class="highlight">Video clips</td>
						</tr>
						<tr data-tooltip-title="Mobile Website" data-tooltip="Webs automatically generates an up-to-date mobile version of your website so you don't miss out on mobile visitors. ">
							<td class="x-mark"></td>
							<td class="x-mark"></td>
							<td class="highlight">2 porta retratos 20x25</td>
						</tr>
						<tr>
							<td class="x-mark"></td>
							<td class="x-mark"></td>
							<td data-tooltip-title="Advanced Statistics" data-tooltip="Get insights about your visitors and tips to drive more traffic to your site." class="highlight">
									Fotografía 80x50 cm (Retablo)
							</td>
						</tr>
						<tr>
							<td class="x-mark"></td>
							<td class="x-mark"></td>
							<td data-tooltip-title="Unlimited Storage" data-tooltip="The content you share on your website takes up space. Get unlimited storage for things like photos, videos, and documents with a Pro package." class="highlight">
									Obsequios especiales</td>
						</tr>

						</tbody>
				<tbody>
				<tr id="botons-bottom">
					<th>
						<a class="plans-signup-button webs-ext-btn webs-ext-btn-green" title="RESERVAR" href="/reservas">
							<span class="plan-sign-up" data-sku="STARTER_TWO_YEAR_R1">RESERVAR</span>
						</a>
					</th>
					<th>
						<a class="plans-signup-button webs-ext-btn webs-ext-btn-green" title="RESERVAR" href="/reservas">
							<span class="plan-sign-up" data-sku="ENHANCED_TWO_YEAR_R1">RESERVAR</span>
						</a>
					</th>
					<th>
						<a class="plans-signup-button webs-ext-btn webs-ext-btn-green" title="RESERVAR" href="/reservas">
							<span class="plan-sign-up" data-sku="PRO_TWO_YEAR_R1">RESERVAR</span>
						</a>
					</th>
				</tr>
				</tbody>
				</table>
	</section>

	<article class="frequently-asked-questions">
		<h1 class="section-title">Preguntas frecuentes:</h1>

		<h2>¿Cómo reservo?</h2>
		<p>En efectivo, 50% al firmar contrato
		50% quince días antes del matrimonio</p>

		<h2>¿En qué momento reservamos?</h2>
		<p>Nosotros aconsejamos reservar
		mínimo con 3 meses de anterioridad.
		Así podremos acompañarlos en su día.</p>

		<h2>¿Desde y hasta qué hora nos acompañas?</h2>
		<p>Acompañamiento desde el maquillaje,
		hasta final de la hora loca</p>

		<h2>¿Cuándo nos entregas las fotos?</h2>
		<p>De 3 a 4 días después del matrimonio, 
		entregamos una USB con todas las fotos
		en alta y baja resolución + una carpeta
		llamada "favoritas tufoto" como sugerencia
		para las fotografías del libro.</p>

		<h2>¿En cuanto tiempo nos entregas el libro?</h2>
		<p>Nuestra meta es entregar el libro en 1 mes,
		y para eso contamos con el apoyo de la pareja.
		Después de entregado la USB, cuentan con 10 días
		para hacernos saber su selección y luego
		nosotros contamos con 15 días para la entrega.</p>

		<h2>¿En el libro pueden ir más de 80 fotos?</h2>
		<p>Si, pero eso reduciría en general el tamaño
		de las fotos impresas en el mismo, por eso
		aconsejamos de 60 a 80.</p>

		<h2>¿y los retoques?</h2>
		<p>Son retocadas únicamente las fotografías
		que van en el libro, y cada una de las fotografías
		cuenta con un tratamiento especial.
		Nuestro retoque es mínimo, pero tenemos en 
		cuenta uno que otro detalle.</p>

		<h3 style="text-align:center;">Si tienes alguna otra pregunta, escríbenos a
		<span class="text-email">contacto@tufoto.co</span> <br> o diligencia el formulario
		de contacto y responderemos a tus inquietudes.</h3>

	</article>
@endsection