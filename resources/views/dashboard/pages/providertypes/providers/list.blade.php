@extends('dashboard.pages.layout')

@section('title_page') <i class="gi fa-fw gi-wallet"></i> {{ $providerType->name }}
    <a href="{{ route('admin.providertypes.providers.create', $providerType->id) }}" class="btn btn-primary" title="Nuevo Proveedor"><i class="fa fa-plus"></i> </a>
@stop

@section('breadcrumbs') {!! Breadcrumbs::render('admin.providertypes.type', $providerType) !!} @stop

@section('content_body_page')
    <div class="row gallery">
        <div class="col-md-3">
            <div class="block">
                <div class="block-title">
                    <h2>Datos del Tipo de Proveedor</h2>
                </div>
                {!! Form::model($providerType, $form_data + ['class' => 'form-bordered']) !!}
                    {!! Field::text('name', ['ph' => 'Nombre', 'tpl' => 'themes.bootstrap.fields.simple'])!!}
                    {!! Field::textarea('description', ['ph' => 'Descripción', 'rows' => '4', 'tpl' => 'themes.bootstrap.fields.simple'])!!} 
                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-effect-ripple btn-primary">Actualizar</button>
                    </div>
                {!! Form::close() !!}

            </div>
        </div>
        <div class="col-md-9">
            @foreach($providers as $provider)
                <!-- Carousel Widget -->
                <div class="col-sm-4" id="{{ $provider->id }}">
                    <div class="widget">
                        <div class="widget-content widget-content-full">
                            <div class="gallery-image-container animation-fadeInQuick" style="margin:0;">
                                <img src="{{ $provider->cover_image }}" alt="{{ $provider->alt }}">
                                <div class="gallery-image-options">
                                    <h3 class="text-light"><strong>{!! $provider->name !!}</strong></h3>
                                    <a href="{{ route('admin.providertypes.providers.show', [$providerType->id, $provider->id]) }}" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" title="Ver Fotos">
                                        <i class="fa fa-picture-o"></i>
                                    </a>
                                    <a href="{{ $provider->cover_image }}" class="gallery-link btn btn-success" data-toggle="lightbox-image" title="{{ $provider->alt }}">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                    <a href="{{ route('admin.providertypes.providers.edit', [$providerType->id, $provider->id]) }}" class="btn btn-effect-ripple btn-warning" data-toggle="tooltip" title="Editar">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="AppServices.postDeleteEntity(this, '/admin/providertypes/{{ $providerType->id }}/providers/{{ $provider->id }}' )" data-token="{{ csrf_token() }}" data-entity-id="{{ $provider->id }}" class="btn btn-effect-ripple btn-danger" data-toggle="tooltip" title="Borrar">
                                        <i class="gi gi-skull"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-mini themed-background-mutted text-dark">
                            <strong>{{ $provider->date }}</strong> <span class="label label-primary">{{ $provider->tag }}</span>
                        </div>
                    </div>
                </div>
                <!-- END Carousel Widget -->
            @endforeach
            <div class="col-md-12 text-center">
                {!! $providers->render() !!}
            </div>
        </div>
    </div>

@stop