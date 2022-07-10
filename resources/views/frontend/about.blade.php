@extends('frontend.layouts.main')

@section('main-container')


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">ABOUT US <span class="title-under"></span></h1>
			<p class="page-description">
				JAI SHRI RADHEY KRISHN FOUNDATION
			</p>
			
		</div>

	</div>

	<div class="main-container">

		<div class="container">

			<div class="col-md-6">

				<img src="assets/images/about-us.jpg" alt="" class="img-responsive">

			</div>

			<div class="col-md-6">

				<h2 class="title-style-2">ABOUT US <span class="title-under"></span></h2>
				@foreach ($abouts as $about)
				<p>
					{{$about['about']}}
				</p>
@endforeach
				
				
			</div>

		</div>

			<div class="row fadeIn animated">

				
@foreach ($abouts as $about)
	
<div class="row">

	<div class="col-md-3 col-sm-6">
	
	  <div class="about-us-col">

			<div class="col-icon-wrapper">
			  <img src="assets/images/icons/our-mission-icon.png" alt="">
			</div>
			<h3 class="col-title">{{$about['title']}}</h3>
			<div class="col-details">

			  <p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor sit amet consect</p>
			  
			</div>
			<a href="#" class="btn btn-primary"> Read more </a>
		
	  </div>
	  
	</div>

					
						
	@endforeach
				
</div>	

	    <div class="our-team animate-onscroll fadeIn">

	        <div class="container">

	            <h2 class="title-style-1">Our Team <span class="title-under"></span></h2>

	            <div class="row">

	                <div class="col-md-3 col-sm-6">

	                    <div class="team-member">

	                        <div class="thumnail">

	                            <img src="assets/images/team/member-1.jpg" alt="" class="cause-img">
	                            
	                        </div>



	                        <h4 class="member-name"><a href="#">Robert C. Numbers</a></h4>

	                        <div class="member-position">
	                            CO-FOUNDER
	                        </div>

	                        <div class="btn-holder">

	                          <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
	                          
	                        </div>

	                        

	                    </div> <!-- /.team-member -->
	                    
	                </div>

	               
	            </div> <!-- /.row -->

	        </div>

	    </div>
		


	</div>


    @endsection