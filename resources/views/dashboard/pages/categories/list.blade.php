@extends('dashboard.pages.layout')

@section('title_page') <i class="fa fa-fw fa-picture-o"></i> Categorías
<a href="{{ route('admin.categories.create') }}" class="btn btn-primary" title="Nueva Categoría"><i class="fa fa-plus"></i> </a>
@endsection

@section('breadcrumbs') {!! Breadcrumbs::render('admin.categories') !!} @endsection

@section('content_body_page')
	<div class="row gallery">
		@foreach($categories as $category)
		    <!-- Carousel Widget -->
            <div class="col-sm-4" id="{{ $category->id }}">
                <div class="widget">
                    <div class="widget-content widget-content-mini themed-background text-light-op">
                        <i class="fa fa-fw fa-picture-o"></i> {{ $category->title_plural }}
                    </div>
                    <div class="widget-content widget-content-full">
                    	<div class="gallery-image-container animation-fadeInQuick">
                            <img src="{{ $category->cover }}" alt="{{ $category->alt }}">
                            <div class="gallery-image-options">
                                <h4 class="text-light"><strong>{{ $category->description }}</strong></h4>
                                <a href="{{ route('admin.categories.galleries.index', $category->id) }}" class="btn btn-effect-ripple btn-primary btn-lg" data-toggle="tooltip" title="Ver Galerías">
                                	<i class="fa fa-picture-o"></i>
                                </a>
                                <a href="{{ $category->cover }}" class="gallery-link btn btn-success btn-lg" data-toggle="lightbox-image" title="{{ $category->alt }}">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                                <a href="javascript:void(0)" onclick="AppServices.postDeleteEntity(this, '/admin/categories/{{ $category->id }}' )" data-token="{{ csrf_token() }}" data-entity-id="{{ $category->id }}" class="btn btn-effect-ripple btn-danger btn-lg" data-toggle="tooltip" title="Borrar">
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

    {!! $categories->render() !!}
@endsection