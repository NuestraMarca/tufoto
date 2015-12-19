@extends('dashboard.pages.form-layouts.horizontal')

@section('breadcrumbs') {!! Breadcrumbs::render('admin.categories.category', $category) !!} @endsection

@section('title_page')
  <i class="fa fa-fw fa-picture-o"></i> Nueva Categoría
@endsection

@section('title_form') Datos de la Categoría @endsection

@section('form')
  @include('dashboard.pages.categories.inputs')
@endsection
