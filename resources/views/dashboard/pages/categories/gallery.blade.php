@extends('dashboard.layout')
@section('classes_page_content') inner-sidebar-left @endsection
@section('content_page')
    <!-- Inner Sidebar -->
    <div id="page-content-sidebar">
        <!-- Collapsible Options -->
        <a href="javascript:void(0)" class="btn btn-block btn-default visible-xs" data-toggle="collapse" data-target="#media-options">Media Box</a>
        <div id="media-options" class="collapse navbar-collapse remove-padding">
            <!-- Filter -->
           
            <!-- Upload New File -->
            <div class="block-section">
                <h4 class="inner-sidebar-header">Subir nueva imagen</h4>
                <form action="page_app_media.html" class="dropzone"></form>
            </div>
            <!-- END Upload New File -->
        </div>
        <!-- END Collapsible Options -->
    </div>

	<div class="row media-filter-items">
		@foreach($gallery->photos as $photo)
            <div class="col-sm-4 col-lg-3">
                <div class="media-items animation-fadeInQuick2" data-category="image">
                        <div class="gallery-image-container animation-fadeInQuick2" data-category="travel" style="margin:0px;">
							<img src="/{{ $photo }}" itemprop="thumbnail" alt="{{ $gallery->date }} - {{ $gallery->title }}" style="width:100%;">
							<a href="/{{ $photo }}" itemprop="contentUrl" data-size="1200x800" class="gallery-image-options" data-toggle="lightbox-image" title="Image Info">
								<i class="fa fa-search-plus fa-3x text-light"></i>
							</a>
						</div>
                    <div class="media-items-options text-right">
                        <a href="javascript:void(0)" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection

@section('js_aditional')
	<!-- Load and execute javascript code used only in this page -->
    <script src="/assets/js/pages/appMedia.js"></script>
    <script>$(function(){ AppMedia.init(); });</script>
@endsection