@extends('frontend.layouts.main')

@section('main-container')


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">GALLERY <span class="title-under"></span></h1>
			<p class="page-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
			</p>
			
		</div>

	</div>

	<div class="main-container">

		<div class="container gallery fadeIn animated">

			<div class="row">
				
				@foreach(File::glob(public_path('assets/images/gallery/').'/*') as $path)
				<a href="{{ str_replace(public_path(), '', $path) }}" class="col-md-3 col-sm-4 gallery-item lightbox">
				<img src="{{ str_replace(public_path(), '', $path) }}">
			 @endforeach
			 {{-- assets/images/gallery/7610291856_931fb9f461_k.jpg --}}

						{{-- <img src="assets/images/gallery/thumb/7610291856_931fb9f461_k.jpg" alt=""> --}}

						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>

					</a> <!-- /.gallery-item -->

					
				
			</div>
			
		</div>


	</div> <!-- /.main-container  -->


    @endsection