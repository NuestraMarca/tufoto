@extends('dashboard.pages.layout')

@section('title_page') <i class="gi fa-fw gi-wallet"></i> Proveedores
<a href="{{ route('admin.providertypes.create') }}" class="btn btn-primary" title="Nuevo Proveedor"><i class="fa fa-plus"></i> </a>
@endsection

@section('breadcrumbs') {!! Breadcrumbs::render('admin.providertypes') !!} @endsection

@section('content_body_page')
	<div class="row gallery">
		@foreach($providerTypes as $type)
		    <div class="col-sm-6 col-lg-4">
                <a href="{{ route('admin.providertypes.show', $type->id) }}" class="widget">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background">
                        <i class="gi gi-wallet text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3">
                        <strong><span data-toggle="counter" data-to="{{ $type->providers()->count() }}">{{ $type->providers()->count() }}</span></strong>
                    </h2>
                    <h4 class="text-muted">{{ $type->name }}</h4>
                </div>
                </a>
            </div>
	    @endforeach
    </div>

    {!! $providerTypes->render() !!}
@endsection