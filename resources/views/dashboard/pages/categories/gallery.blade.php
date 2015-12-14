@extends('dashboard.pages.layout')
@section('content_page')

	<div id="fb-root"></div>
	
		<section id="gallery-detail">
			<h1> {{ $gallery->title_or_tag }}</h1>
			<h2> {{ $gallery->title }}</h2>
			<div class="fb-like" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>
			
			<article>
				<span id="gallery-date">{{ $gallery->date }}  </span> {!! $gallery->description !!}
			</article>

			<section class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">

				@foreach($gallery->photos as $photo)
					<div class="col-sm-3">
						<div class="gallery-image-container animation-fadeInQuick2" data-category="travel">
							<img src="img/placeholders/photos/photo5.jpg" itemprop="thumbnail" alt="{{ $gallery->date }} - {{ $gallery->title }}">
							<a href="/{{ $photo }}" itemprop="contentUrl" data-size="1200x800" class="gallery-image-options" data-toggle="lightbox-image" title="Image Info">
								<h2 class="text-light"><strong>{{ $gallery->title }}</strong></h2>
								<i class="fa fa-search-plus fa-3x text-light"></i>
							</a>
						</div>
					</div>
				@endforeach

			</section>
		</section>
	</div>

@endsection