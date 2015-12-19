@extends('dashboard.pages.form-layouts.horizontal')

@section('title_page')
  <i class="fa fa-fw fa-picture-o"></i> {{ $category->title_singular}}: 
  @if($gallery->exists) {{ $gallery->title }} @else Nueva Galería @endif
@endsection

@section('breadcrumbs') {!! Breadcrumbs::render('admin.categories.galleries.gallery', $category, $gallery) !!} @endsection

@section('title_form') Datos de la Galería @endsection

@section('form')
  {!! Form::model($gallery, $form_data) !!}

    {!! Field::text('title', ['ph' => 'Nombre de la Galería'])!!}
    {!! Field::date('date', ['ph' => 'Fecha de la Galería'])!!}
    {!! Field::text('tag', ['ph' => 'Etiqueta de la Galería'])!!}
    {!! Field::textarea('description', ['ph' => 'Descripción de la Galería'])!!}
    
    <div class="form-group form-actions">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-effect-ripple btn-primary">
              <i class="gi gi-thumbs_up"></i> Guardar
            </button>
            <a href="{{ route('admin.categories.galleries.index', $category->id) }}" class="btn btn-effect-ripple btn-danger">
              <i class="fa fa-frown-o"></i> Cancelar
            </a>
        </div>
    </div>
  {!! Form::close() !!}
@endsection
