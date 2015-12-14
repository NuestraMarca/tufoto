@extends('dashboard.pages.layout')
@section('content_page')
	<section class="cover-gallery">
		<div class="row">
			@foreach($categories as $category)
				<div class="col-sm-3">
					<a href="/admin/categories/{{ $category->id }}" class="widget">
						<div class="widget-content themed-background text-light-op">
							<i class="fa fa-fw fa-file-text"></i> <strong>{{ $category->title_plural }}</strong>
						</div>
					
						<div class="widget-image widget-image-xs">
							<img src="/{{ $category->cover_image }}" alt="{{ $category->alt }}" style="width:5px; min-width:110%;">
							<div class="widget-image-content">
								
							</div>
						</div>
					</a>
				</div>
			
			@endforeach
		</div>
	</section>
	
@endsection