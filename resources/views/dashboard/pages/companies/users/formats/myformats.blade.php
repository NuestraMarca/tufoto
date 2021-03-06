@extends('dashboard.pages.layout')
@section('title_page')<i class="fa fa-check-square-o"></i> Formatos de Listas de chequeo @stop
@section('breadcrumbs') {!! Breadcrumbs::render('myformats') !!} @stop
@section('content_body_page')
    <div class="row">
        @foreach($formats as $format)
            <div class="col-sm-6 col-lg-3">
                @include('dashboard.extends.widget',[
                'widget_url'    => route('myformats.checklists.index', $format->id),
                'widget_title'  => $format->name,
                'widget_count'  => $format->getUserChecklistsCount($user),
                'widget_icon'   => 'fa fa-folder-open',
                'widget_themed' => 'themed-background-warning'
                ])
            </div>
        @endforeach
    </div>
@stop

@section('js_aditional')
    <!-- Load and execute javascript code used only in this page -->
        <script src="assets/js/pages/readyDashboard.js"></script>
        <script>$(function(){ ReadyDashboard.init(); });</script>
@stop