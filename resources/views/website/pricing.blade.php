@extends('website.layout')

@section('title')
	Paquetes de fotografías para Matrimonio (Bodas y Prebodas)
@endsection

@section('webPageScope') itemscope itemtype="http://schema.org/QAPage" @endsection

@section('description')
	Conoce los Paquetes de nuestras fotografías para tu matrimonio o Boda - Pregunta
	por nuestra Promoción de Preboda. 
@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('pricing') !!}
@endsection

@section('content')
	
	<section class="plan-options">
		<h1 class="section-title">Paquetes de Fotografías para Bodas - Matrimonios</h1>
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
							<ul class="visible-mobile">
								<li>* USB con todas las fotografías</li>
								<li>* 50 fotos impresas 15x20 cm</li>
							</ul>
						</div>
						<a class="plans-signup-button webs-ext-btn webs-ext-btn-green" title="COTIZAR" href="/contacto" onclick="fbq('track', 'InitiateCheckout');">
							<span class="plan-sign-up" data-sku="STARTER_TWO_YEAR_R1">COTIZAR</span>
						</a>

					</th>
					<th>
						<div class="plan-title">Oro</div>
						<hr>
						<div class="price-graphic">
							<ul class="visible-mobile">
								<li>* USB con todas las fotografías</li>
								<li>* Fotolibro 30x30 cm (60 a 80 fotos)</li>
								<li>* Estuche de cuero</li>
							</ul>
						</div>
						<a class="plans-signup-button webs-ext-btn webs-ext-btn-green" title="COTIZAR" href="/contacto" onclick="fbq('track', 'InitiateCheckout');">
							<span class="plan-sign-up" data-sku="ENHANCED_TWO_YEAR_R1">COTIZAR</span>
						</a>
					</th>
					<th class="highlight">
						<div class="plan-title">Diamante</div>
						<hr>
						<div class="price-graphic">
							<ul class="visible-mobile">
								<li>* USB con todas las fotografías</li>
								<li>* Fotolibro 30x30 cm (60 a 80 fotos)</li>
								<li>* Estuche de madera</li>
								<li>* Video clips</li>
								<li>* 2 porta retratos 20x25</li>
								<li>* Fotografía 80x50 cm (Retablo)</li>
								<li>* Obsequios especiales</li>
							</ul>
						</div>
						<a class="plans-signup-button webs-ext-btn webs-ext-btn-green" title="COTIZAR" href="/contacto" onclick="fbq('track', 'InitiateCheckout');">
							<span class="plan-sign-up" data-sku="PRO_TWO_YEAR_R1">COTIZAR</span>
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
				</table>
	</section>

	<article class="frequently-asked-questions">
		<h2 class="section-title" style="font-size:2em;">Preguntas frecuentes sobre las fotografías para tu Boda</h2>

		<div itemscope itemtype="http://schema.org/Question">
			<h3 itemprop="name">¿Cómo reservo?</h3>
			<p itemprop="suggestedAnswer" itemscope itemtype="http://schema.org/Answer">
			En efectivo, 50% al firmar contrato
			50% quince días antes del matrimonio</p>
		</div>

		<div itemscope itemtype="http://schema.org/Question">
			<h3 itemprop="name">¿En qué momento reservamos?</h3>
			<p itemprop="suggestedAnswer" itemscope itemtype="http://schema.org/Answer">
			Nosotros aconsejamos reservar
			mínimo con 3 meses de anterioridad.
			Así podremos acompañarlos en su día.</p>
		</div>

		<div itemscope itemtype="http://schema.org/Question">
			<h3 itemprop="name">¿Desde y hasta qué hora nos acompañas?</h3>
			<p itemprop="suggestedAnswer" itemscope itemtype="http://schema.org/Answer">
			Acompañamiento desde el maquillaje,
			hasta final de la hora loca</p>
		</div>

		<div itemscope itemtype="http://schema.org/Question">
			<h3 itemprop="name">¿Cuándo nos entregas las fotos?</h3>
			<p itemprop="suggestedAnswer" itemscope itemtype="http://schema.org/Answer">
			De 3 a 4 días después del matrimonio, 
			entregamos una USB con todas las fotos
			en alta y baja resolución + una carpeta
			llamada "favoritas tufoto" como sugerencia
			para las fotografías del libro.</p>
		</div>

		<div itemscope itemtype="http://schema.org/Question">
			<h3 itemprop="name">¿En cuanto tiempo nos entregas el libro?</h3>
			<p itemprop="suggestedAnswer" itemscope itemtype="http://schema.org/Answer">
			Nuestra meta es entregar el libro en 1 mes,
			y para eso contamos con el apoyo de la pareja.
			Después de entregado la USB, cuentan con 10 días
			para hacernos saber su selección y luego
			nosotros contamos con 15 días para la entrega.</p>
		</div>

		<div itemscope itemtype="http://schema.org/Question">
			<h3 itemprop="name">¿En el libro pueden ir más de 80 fotos?</h3>
			<p itemprop="suggestedAnswer" itemscope itemtype="http://schema.org/Answer">
			Si, pero eso reduciría en general el tamaño
			de las fotos impresas en el mismo, por eso
			aconsejamos de 60 a 80.</p>
		</div>

		<div itemscope itemtype="http://schema.org/Question">
			<h3 itemprop="name">¿y los retoques?</h3>
			<p itemprop="suggestedAnswer" itemscope itemtype="http://schema.org/Answer">
			Son retocadas únicamente las fotografías
			que van en el libro, y cada una de las fotografías
			cuenta con un tratamiento especial.
			Nuestro retoque es mínimo, pero tenemos en 
			cuenta uno que otro detalle.</p>
		</div>

		<h3 style="text-align:center;">Si tienes alguna otra pregunta, escríbenos a
		<span class="text-email">tufoto.co@gmail.com</span> <br> o diligencia el <a href="/contacto">formulario
		de contacto</a> y responderemos a tus inquietudes.</h3>

	</article>
@endsection

@section('extra-js')
	<!-- Google Code for Ingreso a p&aacute;gina de reservas Conversion Page -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 1009818695;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "qUGVCL7_yWMQx7jC4QM";
	var google_remarketing_only = false;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1009818695/?label=qUGVCL7_yWMQx7jC4QM&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>
@endsection
