@extends('template-layouts.app')

@section('content')

<head>
  <title>Contact-Us</title>
</head>
           <section class="subpage-header">
				<div class="container">
					<div class="site-title clearfix">
						<h2>Contact Us</h2>
						<ul class="breadcrumbs">
							<li><a href="{{route('home')}}">Home</a></li>
							<li>Contact Us</li>
						</ul>
					</div>
					<a href="{{route('getStarted')}}" class="btn btn-primary get-in-touch" data-text="Get Started"><i class="fa fa-arrow-right"></i>Get Started</a>
				</div>
			</section>
            
            
			
			<!-- CONTACT US -->
            <section>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 animate fadeInLeft">
							<h3>Sales Queries</h3>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<img src="{{asset('template')}}/images/sales-quries-img.jpg" class="quries-img" alt="">
									<div class="height-20"></div>
								</div>
								<div class="col-md-8 col-sm-8">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor Eaque ipsa quae.</p>
									<p>ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. luptas sit aspernatur.</p>
								</div>
							</div>
							<div class="height-20"></div>
							<h3>Follow Us</h3>
							<ul class="social">
								<li class="animate bounceIn"><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
								<li class="animate bounceIn" data-delay="100"><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
								<li class="animate bounceIn" data-delay="200"><a href="#." class="google-plus"><i class="icon-google"></i></a></li>
								<li class="animate bounceIn" data-delay="300"><a href="#." class="linkedin"><i class="icon-linkedin3"></i></a></li>
							</ul>
							<div class="height-50"></div>
						</div>
						
						<div class="form">
						<div class="col-md-6 col-sm-6 animate fadeInRight">
						  @if(session()->has('success'))
							<p class="success" id="success">
							  <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                  <strong> {{ session('success') }} </strong>
                               </div>
							</p>
							@endif
							
							<p class="error" id="error" style="display:none;"></p>
						
							<form class="contact-form" name="contact_form" id="contact_form" method="POST" action="{{ route('contact-us') }}" >
								@csrf
								<div class="row">
									<div class="col-md-6">
										<input type="text" required data-delay="300" placeholder="Your full name" name="contact_name" id="contact_name" class="input">
									</div>
									<div class="col-md-6">
										<input type="text" required data-delay="300" placeholder="E-mail Address" name="contact_email" id="contact_email" class="input">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<input type="text" required data-delay="300" placeholder="Phone No" name="contact_phone" id="contact_phone" class="input">
									</div>
									@auth
									@if( Auth::user()->role_num === '1')
									<div class="col-md-6">
										<input type="text" data-delay="300" style="font-weight: bold;" value="Role as Entrepreneur" name="contact_role" id="contact_role" class="input" readonly>
									</div>
									@endif
									@if( Auth::user()->role_num === '2')
									<div class="col-md-6">
										<input type="text" data-delay="300" style="font-weight: bold;" value="Role as Start Up" name="contact_role" id="contact_role" class="input" readonly>
									</div>
									@endif
									@if( Auth::user()->role_num === '3')
									<div class="col-md-6">
										<input type="text" data-delay="300" style="font-weight: bold;" value="Role as Small Business" name="contact_role" id="contact_role" class="input" readonly >
									</div>
									@endif
									@if( Auth::user()->role_num === '4')
									<div class="col-md-6">
										<input type="text" data-delay="300" style="font-weight: bold;" value="Role as Investor" name="contact_role" id="contact_role" class="input" readonly >
									</div>
									@endif
									@endauth

									@guest
									<input type="text" data-delay="300" style="font-weight: bold;"  name="contact_role" id="contact_role" class="input" hidden >
									@endguest
								</div>
								<textarea data-delay="500" required class="required valid" placeholder="Message" name="message" id="message"></textarea>
								<button class="btn btn-primary" name="" type="submit" data-text="Send Message" onClick="validateContact();">Send Message</button>
							</form>
					
							
							
						</div>
						</div>
						
					</div>
				</div>
			</section><!-- / COMPANY OVERVIEW -->
			

@endsection