@extends('dashboard.layout')
@section('page_content_class') inner-sidebar-left @endsection
@section('content_page')
	<!-- Inner Sidebar -->
	<div id="page-content-sidebar">
	    <!-- Collapsible Options -->
	    <a href="javascript:void(0)" class="btn btn-block btn-default visible-xs" data-toggle="collapse" data-target="#media-options">Subir más Fotos</a>
	    <div id="media-options" class="collapse navbar-collapse remove-padding">
	        <!-- Upload New File -->
	        <div class="block-section">
	            <h4 class="inner-sidebar-header">
	            	<a href="{{ route('admin.providertypes.show', $providerType->id) }}">
	            		{{ $providerType->name }}:
	            	</a> 
	            	{{ $provider->name }}
	            </h4>

	            <img src="{{ $provider->cover_image }}" alt="{{ $provider->alt }}" style="width:100%; margin-bottom:10px;">
	            
	            {!! Form::open(['route' => ['admin.providertypes.providers.add-photo', $providerType->id, $provider->id], 'method' => 'POST', 'class' => 'dropzone']) !!}
	        </div>
	        <!-- END Upload New File -->
	    </div>
	    <!-- END Collapsible Options -->
	</div>
	<!-- END Inner Sidebar -->

	<!-- Media Box Content -->
	<!-- Add the category value for each item in its data-category attribute (for the filter functionality to work) -->
	<div class="row media-filter-items">
		@foreach($provider->smalls as $count => $photo)
			<?php 
				$photoName 	=  explode('/', $photo)[4]; 
				$photoGrand =  $provider->getPhoto($photoName);
				$route 		=  route('admin.providertypes.providers.delete-photo', [$providerType->id, $provider->id]); 
			?>

		    <div class="col-sm-4 col-lg-3" id="{{ $count }}">
		        <div class="media-items animation-fadeInQuick2" data-category="image">
		            <div class="media-items-options text-right">
		                <a href="{{ route('admin.providertypes.providers.add-cover', [$providerType->id, $provider->id]) }}/?cover={{ $photoName }}" class="btn btn-sm btn-warning"><i class="gi gi-star"></i></a>
		                <a href="/{{ $photoGrand }}" class="btn btn-sm btn-info" data-toggle="lightbox-image">Ver Foto</a>
		                <a href="javascript:void(0)" 
		                	onclick="AppServices.postDeletePhoto(this, '{{ $route }}', '{{ $photoName }}' )" 
		                	data-token="{{ csrf_token() }}" 
		                	data-entity-id="{{ $count }}" 
		                	class="btn btn-sm btn-danger btn-effect-ripple">
		                	<i class="gi gi-skull"></i>
		                </a>
		            </div>
		            <div class="media-items-content">
		                <img src="/{{ $photo }}" style="width:100%;">
		            </div>
		            <h5>
		                {{ $photoName }}
		            </h5>
		        </div>
		    </div>
	    @endforeach
	   
	</div>
	<!-- END Media Box Content -->

@endsection

@section('js_aditional')
	<script>
		
		var myDropzone = new Dropzone(".dropzone", { 
			dictDefaultMessage: 'Suelte aquí las fotografías',
			maxFilesize: 2, // MB,
			dictFileTooBig: 'La foto es demasiado grande. No puede superar las 2MB',
			acceptedFiles: 'image/*',
			uploadMultiple: true
		});

		myDropzone.on("successmultiple", function(file) {
			setTimeout(function(){
			  location.reload();
			}, 5000);
		});

	</script>
@endsection