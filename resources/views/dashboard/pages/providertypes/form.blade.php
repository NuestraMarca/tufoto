@extends('dashboard.pages.form-layouts.horizontal')

@section('breadcrumbs') {!! Breadcrumbs::render('admin.providertypes.type', $providerType) !!} @endsection

@section('title_page')
  <i class="gi fa-fw gi-wallet"></i> Nuevo Tipo de Proveedor
@endsection

@section('title_form') Datos del Tipo de Proveedor @endsection

@section('form')
  {!! Form::model($providerType, $form_data) !!}

    {!! Field::text('name', ['ph' => 'Nombre'])!!}
    {!! Field::textarea('description', ['ph' => 'Descripción de la categoría'])!!}
    
    <div class="form-group form-actions">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-effect-ripple btn-primary"> 
                <i class="gi gi-thumbs_up"></i> Guardar
            </button>
            <a href="{{ route('admin.providertypes.index') }}" class="btn btn-effect-ripple btn-danger"> 
                <i class="fa fa-frown-o"></i> Cancelar
            </a>
        </div>
    </div>

{!! Form::close() !!}
@endsection
