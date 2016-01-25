@extends('dashboard.pages.layout')

@section('title_page') <i class="fa fa-fw fa-picture-o"></i> {{ $category->title_plural }}
	<a href="{{ route('admin.categories.galleries.create', $category->id) }}" class="btn btn-primary" title="Nueva Categoría"><i class="fa fa-plus"></i> </a>
@stop

@section('breadcrumbs') {!! Breadcrumbs::render('admin.categories.galleries', $category) !!} @stop

@section('content_body_page')
	<div class="row gallery">
		<div class="col-md-3">
			<div class="block">
				<div class="block-title">
					<h2>Datos de la Categoría</h2>
				</div>
				{!! Form::model($category, $form_data + ['class' => 'form-bordered']) !!}
				    {!! Field::text('title_singular', ['ph' => 'Nombre en singular', 'tpl' => 'themes.bootstrap.fields.simple'])!!}
				    {!! Field::text('title_plural', ['ph' => 'Nombre en plural', 'tpl' => 'themes.bootstrap.fields.simple'])!!}
				    {!! Field::file('cover', ['ph' => 'Cover de la Categoría', 'tpl' => 'themes.bootstrap.fields.simple'])!!}
				    {!! Field::textarea('description', ['ph' => 'Descripción de la categoría', 'rows' => '4', 'tpl' => 'themes.bootstrap.fields.simple'])!!} 
					{!! Field::textarea('seo_title', ['ph' => 'Titulo SEO de la categoría', 'rows' => '4', 'tpl' => 'themes.bootstrap.fields.simple'])!!}
    				{!! Field::textarea('seo_description', ['ph' => 'Descripción SEO de la categoría', 'rows' => '4', 'tpl' => 'themes.bootstrap.fields.simple'])!!}
					<div class="form-group form-actions">
						<button type="submit" class="btn btn-effect-ripple btn-primary">Actualizar</button>
					</div>
				{!! Form::close() !!}

			</div>
		</div>
		<div class="col-md-9">
			@foreach($galleries as $gallery)
			    <!-- Carousel Widget -->
	            <div class="col-sm-4" id="{{ $gallery->id }}">
	                <div class="widget">
	                    <div class="widget-content widget-content-full">
	                    	<div class="gallery-image-container animation-fadeInQuick" style="margin:0;">
	                            <img src="{{ $gallery->cover_image }}" alt="{{ $gallery->alt }}">
	                            <div class="gallery-image-options">
	                                <h3 class="text-light"><strong>{!! $gallery->title !!}</strong></h3>
	                                <a href="{{ route('admin.categories.galleries.show', [$category->id, $gallery->id]) }}" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" title="Ver Fotos">
	                                	<i class="fa fa-picture-o"></i>
	                                </a>
	                                <a href="{{ $gallery->cover_image }}" class="gallery-link btn btn-success" data-toggle="lightbox-image" title="{{ $gallery->alt }}">
	                                	<i class="fa fa-search-plus"></i>
	                                </a>
	                                <a href="{{ route('admin.categories.galleries.edit', [$category->id, $gallery->id]) }}" class="btn btn-effect-ripple btn-warning" data-toggle="tooltip" title="Editar">
	                                	<i class="fa fa-pencil"></i>
	                                </a>
	                                <a href="javascript:void(0)" onclick="AppServices.postDeleteEntity(this, '/admin/categories/{{ $category->id }}/galleries/{{ $gallery->id }}' )" data-token="{{ csrf_token() }}" data-entity-id="{{ $gallery->id }}" class="btn btn-effect-ripple btn-danger" data-toggle="tooltip" title="Borrar">
	                                	<i class="gi gi-skull"></i>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="widget-content widget-content-mini themed-background-mutted text-dark">
	                        <strong>{{ $gallery->date }}</strong> <span class="label label-primary">{{ $gallery->tag }}</span>
	                    </div>
	                </div>
	            </div>
	            <!-- END Carousel Widget -->
		    @endforeach
		    <div class="col-md-12 text-center">
		    	{!! $galleries->render() !!}
		    </div>
	    </div>
    </div>

@stop