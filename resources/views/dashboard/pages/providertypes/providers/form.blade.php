@extends('dashboard.pages.form-layouts.horizontal')

@section('title_page')
  <i class="fa fa-fw fa-picture-o"></i> {{ $providerType->name}}: 
  @if($provider->exists) {{ $provider->title }} @else Nuevo Proveedor @endif
@endsection

@section('breadcrumbs') {!! Breadcrumbs::render('admin.providertypes.type.provider', $providerType, $provider) !!} @endsection

@section('title_form') Datos del Proveedor @endsection

@section('form')
  {!! Form::model($provider, $form_data) !!}

    {!! Field::text('name', ['ph' => 'Nombre del Proveedor'])!!}
    {!! Field::text('tel', ['ph' => 'Telefono del Proveedor'])!!}
    {!! Field::text('address', ['ph' => 'Dirección del Proveedor'])!!}
    {!! Field::textarea('links', ['ph' => 'Links del Proveedor'])!!}
    
    <div class="form-group form-actions">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-effect-ripple btn-primary">
              <i class="gi gi-thumbs_up"></i> Guardar
            </button>
            <a href="{{ route('admin.providertypes.providers.index', $providerType->id) }}" class="btn btn-effect-ripple btn-danger">
              <i class="fa fa-frown-o"></i> Cancelar
            </a>
        </div>
    </div>
  {!! Form::close() !!}
@endsection
