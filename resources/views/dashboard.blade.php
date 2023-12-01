@extends('template-layouts.app')
@section('content')
       <!-- MAIN BANNER -->
	   <head>
		   <title>Dashboard</title>
	   </head>
	 
       <?php
         use App\Models\profileComplete;
         use Illuminate\Support\Facades\Auth;
         $profile = profileComplete::where(['user_id'=>Auth::user()->id])->get();
         $profileCount = count($profile);
	   ?>


	
       <section class="subpage-header">
				<div class="container">
					
						<h2>Dashboard</h2>
				</div>
			</section>
            	
       <section>
				<div class="container">
                @can('manage-plan1')
					<div class="row">
					
						<div class="col-md-6 animate fadeInLeft">
						@if(!$profileCount)
						<div class="progress"> <div class="progress-bar bg-info"  role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Profile Completion: 50%</div> </div>
							@endif
							<h2>Welcome to our Entrepreneur Plan</h2>
                            <p>Trusting in your own skills will also take some of the pain of uncertainty out of being an entrepreneur. When you feel uncertain, remember how much experience and knowledge you have. Most entrepreneurs start their business after years of experience working for someone else.</p>
							<div class="height-10"></div>
							@if(!$profileCount)
							<a href="{{ route('plan1.entrepreneur.index') }}" class="btn btn-primary" data-text="NOW COMPLETE YOUR PROFILE">Now Complete your profile</a><br>
						    @endif
							<div class="height-10"></div>
						</div>
						<div class="col-md-6 animate fadeInRight">
                            <div class="image-widget">
								<img src="{{asset('cardPhoto')}}/entrepreneur.jpg" class="img-shadow" alt="">
							</div>
                        </div>
					</div>
                @endcan

                @can('manage-plan2')
					<div class="row">
					
						<div class="col-md-6 animate fadeInLeft">
						@if(!$profileCount)
						<div class="progress"> <div class="progress-bar bg-info"  role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Profile Completion: 50%</div> </div>
						
							@endif
							<h2>Welcome to our Startup Plan</h2>
                            <p>mall Business Administration takes a middle-of-the-road approach recognizing that not all businesses need a comprehensive business plan. Instead, it suggests a lean, simple business planfor startups that highlights the basics, or for businesses to focus on parts of a business plan that make the most sense for their business.</p>
							<div class="height-10"></div>
							@if(!$profileCount)
							<a href="{{ route('plan2.startup.index') }}" class="btn btn-primary" data-text="NOW COMPLETE YOUR PROFILE">Now Complete your profile</a><br>
						    @endif
							<div class="height-10"></div>
							
						</div>
						<div class="col-md-6 animate fadeInRight">
                            <div class="image-widget">
								<img src="{{asset('cardPhoto')}}/startup.jpg" class="img-shadow" alt="">
							</div>
                        </div>
					</div>
                @endcan
                @can('manage-plan3')
					<div class="row">
					
						<div class="col-md-6 animate fadeInLeft">
						@if(!$profileCount)
						<div class="progress"> <div class="progress-bar bg-info"  role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Profile Completion: 50%</div> </div>
							@endif
							<h2>Welcome to our Small Business Plan</h2>
                            <p>A Startup Plan is basically the list of everything that must happen to get the business up and running from the initial idea to scouting locations to securing vendors to getting licenses to stocking the shelves to opening the doors to marketing and advertising to managing growth and on and on.</p>
							<div class="height-10"></div>
							@if(!$profileCount)
							  <a href="{{ route('plan3.smallbusi.index') }}" class="btn btn-primary" data-text="NOW COMPLETE YOUR PROFILE">Now Complete your profile</a><br>
						    @endif
							<div class="height-10"></div>
						</div>
						<div class="col-md-6 animate fadeInRight">
                            <div class="image-widget">
								<img src="{{asset('cardPhoto')}}/small business.jpg" class="img-shadow" alt="">
							</div>
                        </div>
					</div>
                @endcan
                @can('manage-plan4')
					<div class="row">
						<div class="col-md-6 animate fadeInLeft">
						    @if(!$profileCount)
						       <div class="progress"> <div class="progress-bar bg-info"  role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Profile Completion: 50%</div> </div>
							@endif
					
							<h2>Welcome to our <b>Investor</b> Plan</h2>
                            <p>The Investor Plan is the Defined Contribution Section of the Siemens Benefits Scheme. When you join, the Trustee sets up an investment account in your name. Each month, your account is credited with your contributions and those made by the Company.</p>
							<div class="height-10"></div>
							@if(!$profileCount)
							<a href="{{ route('plan4.investor.index') }}" class="btn btn-primary" data-text="NOW COMPLETE YOUR PROFILE">Now Complete your profile</a><br>
						     @endif
							 <div class="height-10"></div>
						</div>
						<div class="col-md-6 animate fadeInRight">
                            <div class="image-widget">
								<img src="{{asset('cardPhoto')}}/investor.jpg" class="img-shadow" alt="">
							</div>
                        </div>
					</div>
                @endcan
				</div>
			</section>
			
			
			
			
			
			
			
			
			
@endsection