@extends('dashboard.pages.layout')

@section('title_page') <i class="gi fa-fw gi-wallet"></i> Proveedores
<a href="{{ route('admin.providertypes.create') }}" class="btn btn-primary" title="Nuevo Proveedor"><i class="fa fa-plus"></i> </a>
@endsection

@section('breadcrumbs') {!! Breadcrumbs::render('admin.providertypes') !!} @endsection

@section('content_body_page')
	<div class="row gallery">
		@foreach($providerTypes as $type)
		    <!-- Carousel Widget -->
            <div class="col-sm-3" id="{{ $type->id }}">
                <div class="widget">
                    <div class="widget-content widget-content-mini themed-background text-light-op">
                        <i class="fa fa-fw fa-picture-o"></i> {{ $type->name }}
                    </div>
                    <div class="widget-content widget-content-full">
                        <div class="gallery-image-container animation-fadeInQuick">
                            <img src="{{ $type->cover }}" alt="{{ $type->alt }}">
                            <div class="gallery-image-options">
                                <h4 class="text-light"><strong>{{ $type->description }}</strong></h4>
                                <a href="{{ route('admin.providertypes.providers.index', $type->id) }}" class="btn btn-effect-ripple btn-primary btn-lg" data-toggle="tooltip" title="Ver Galerías">
                                    <i class="fa fa-picture-o"></i>
                                </a>
                                <a href="{{ $type->cover }}" class="gallery-link btn btn-success btn-lg" data-toggle="lightbox-image" title="{{ $type->alt }}">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                                <a href="javascript:void(0)" onclick="AppServices.postDeleteEntity(this, '/admin/categories/{{ $type->id }}' )" data-token="{{ csrf_token() }}" data-entity-id="{{ $type->id }}" class="btn btn-effect-ripple btn-danger btn-lg" data-toggle="tooltip" title="Borrar">
                                    <i class="gi gi-skull"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Carousel Widget -->
	    @endforeach
    </div>

    {!! $providerTypes->render() !!}
@endsection