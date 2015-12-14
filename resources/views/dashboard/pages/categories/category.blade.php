@extends('dashboard.pages.layout')
@section('content_page')

	<div class = "row">
		@foreach($category->galleries->sortByDesc('date') as $gallery)
			<div class="col-sm-3">
				<a href="/admin/categories/{{ $category->id }}/galleries/{{ $gallery->id }}" class="widget">
					<div class="widget-content themed-background text-light-op">
						<i class="fa fa-fw fa-file-text"></i> <strong>{{ $gallery->title }}</strong>
					</div>
				
					<div class="widget-image widget-image-xs">
						<img src="/{{ $gallery->cover_image }}" alt="{{ $gallery->alt }}" style="width:5px; min-width:110%;">
						<div class="widget-image-content">
							@if($gallery->tag)
								<span class="tag-image"> {{ $gallery->tag }} </span>
							@endif
						</div>
					</div>
				</a>
			</div>
			
			@endforeach
	</div>

@endsection