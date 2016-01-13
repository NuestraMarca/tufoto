@extends('dashboard.layout')
@section('content_page')
	<div class="col-xs-12">
		<div class="row">
			<div class="col-sm-4">
				<a href="/admin/categories" class="widget">
					<div class="widget-content themed-background text-light-op">
						<i class="fa fa-fw fa-pencil"></i> <strong>Administrar Galerías</strong>
					</div>
					<div class="widget-image widget-image-sm">
						<img src="/images/galleries.jpg" alt="image">
						<div class="widget-image-content">
							<h2 class="widget-heading text-light"><strong>Galerías</strong></h2>
						</div>
						<i class="fa fa-picture-o"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-4">
				<a href="/admin/providertypes" class="widget">
					<div class="widget-content themed-background text-light-op">
						<i class="fa fa-fw fa-pencil"></i> <strong>Administrar Proveedores</strong>
					</div>
					<div class="widget-image widget-image-sm">
						<img src="/images/providers.jpg" alt="image">
						<div class="widget-image-content">
							<h2 class="widget-heading text-light"><strong>Proveedores</strong></h2>
						</div>
						<i class="fa fa-picture-o"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-4">
				<a href="/admin/messages" class="widget">
					<div class="widget-content themed-background text-light-op">
						<i class="fa fa-fw fa-pencil"></i> <strong>Administrar Mensajes</strong>
					</div>
					<div class="widget-image widget-image-sm">
						<img src="/images/providers.jpg" alt="image">
						<div class="widget-image-content">
							<h2 class="widget-heading text-light"><strong>Mensajes</strong></h2>
						</div>
						<i class="gi gi-message_new"></i>
					</div>
				</a>
			</div>
		</div>
	</div>
@endsection
@section('js_aditional')

@endsection