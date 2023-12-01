@extends('template-layouts.app')

@section('content')
<head>
  <title>Home</title>
</head>
       <!-- MAIN BANNER -->
	   <section class="cd-hero">
				<ul class="cd-hero-slider autoplay">
					<li class="selected">
						<div class="cd-full-width">
							<div class="container">
								<h2>Money Doesn’t<br>Come <span class="color-default">Without Care</span></h2>
								<p>Finding your next Financial Advisor is as easy as counting from one to five.</p>
								<a href="{{route('about-us')}}" class="btn btn-primary" data-text="read more">read more</a>
								<a href="{{route('getStarted')}}" class="btn btn-default" data-text="Get Started">Get Started</a>
							</div>
						</div>
					</li>

					<li>
						<div class="cd-full-width">
							<div class="container">
								<h2>Friendly <span class="color-default">Assistance</span></h2>
								<p>With over 15 years of experience we’ll ensure you always get the best<br>guidance. we’re with you every step of the way</p>
								<a href="{{route('getStarted')}}" class="btn btn-default" data-text="Get Started today">Get STarted today</a>
							</div>
						</div>
					</li>

					<li>
						<div class="cd-full-width">
							<div class="container text-center">
								<h2 class="color-white">Experience is Everything</h2>
								<p class="color-white">With over 15 years of experience we’ll ensure you always get the best<br>guidance we’re with you every step of the way</p>
								<a href="{{route('about-us')}}" class="btn btn-primary" data-text="read more">read more</a>
								<a href="{{route('getStarted')}}" class="btn btn-default" data-text="Get Started">Get Started</a>
							</div>
						</div>
					</li>

					<li>
						<div class="cd-full-width">
							<div class="container text-right">
								<h2>Clients <span class="color-default">Investment<br></span>Guidance</h2>
								<p>Doing the right thing for our clients, no matter what.</p>
								<a href="{{route('services')}}" class="btn btn-primary" data-text="view our all services">view our all services</a>
							</div>
						</div>
					</li>

				</ul>

				<div class="cd-slider-nav">
					<nav class="container">
						<span class="cd-marker item-1"></span>
						
						<ul>
							<li class="selected"><a href="#0"><div class="slide-number">1</div> Money Care<span>Finding your Next Advisor</span></a></li>
							<li><a href="#0"><div class="slide-number">2</div> Friendly Assistance<span>Export Financial Advice</span></a></li>
							<li><a href="#0"><div class="slide-number">3</div> Our Experience<span>We have 15 Years Experience</span></a></li>
							<li><a href="#0"><div class="slide-number">4</div> Client Investment<span>Doing the right thing</span></a></li>
						</ul>
					</nav> 
				</div>
				
			</section> <!-- / MAIN BANNER -->
            
			
			
			
			<!-- WELCOME -->
            <section class="bg-blue">
				<div class="container">
					<div class="row">
						<div class="col-md-6 animate fadeInLeft">
							<h2>Welcome to Advisor</h2>
							<div class="height-10"></div>
							<p>We have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
							<div class="height-10"></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum nec risus et suscipit Curabitur metus ipsum.</p>
							<div class="height-20"></div>
							<a href="{{route('about-us')}}" class="btn btn-bordered-dark" data-text="read more">read more</a>
							<div class="height-40"></div>
						</div>
						<div class="col-md-6 animate fadeInRight">
							<div class="video-widget">
								<img src="{{asset('template')}}/images/video-thumb.jpg" class="img-shadow" alt="">
								<a href="http://vimeo.com/36031564" class="fancybox-media"><i class="fa fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>
			</section><!-- / WELCOME -->
			
			
			
			<!-- BENIFITS -->
            <section class="text-center">
				<div class="container">
					<div class="two-items-carousel owl-carousel">
						<div class="image-and-text-box animate fadeInLeft">
							<div class="bordered-thumb"><a href="{{route('services')}}"><img src="{{asset('template')}}/images/img1.jpg" alt=""></a></div>
							<h3><a href="{{route('services')}}">Why Our Consulting</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
						</div>
						<div class="image-and-text-box animate fadeInRight">
							<h3><a href="{{route('services')}}">Investment Planning</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
							<div class="bordered-thumb"><a href="services.html"><img src="{{asset('template')}}/images/img2.jpg" alt=""></a></div>
						</div>
						<div class="image-and-text-box">
							<div class="bordered-thumb"><a href="{{route('services')}}"><img src="{{asset('template')}}/images/img3.jpg" alt=""></a></div>
							<h3><a href="{{route('services')}}">Retirement</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
						</div>
						<div class="image-and-text-box">
							<h3><a href="{{route('services')}}">Wealth Management</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
							<div class="bordered-thumb"><a href="services.html"><img src="{{asset('template')}}/images/img4.jpg" alt=""></a></div>
						</div>
						<div class="image-and-text-box">
							<div class="bordered-thumb"><a href="{{route('services')}}"><img src="{{asset('template')}}/images/img5.jpg" alt=""></a></div>
							<h3><a href="{{route('services')}}">Lawyers Consulting</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
						</div>
						<div class="image-and-text-box">
							<h3><a href="{{route('services')}}">Online Consulting</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
							<div class="bordered-thumb"><a href="{{route('services')}}"><img src="{{asset('template')}}/images/img6.jpg" alt=""></a></div>
						</div>
					</div>
				</div>
			</section><!-- / BENIFITS -->
			
			
			
			<!-- FUNFACTS -->
			<div class="container">
				<div class="funfacts text-center">
					<div class="advisor-overlay"></div>
					<div class="funfacts-inner">
						<h2>Helping Small Businesses</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
						<div class="row text-center" id="counters">
							<div class="col-md-3 col-xs-6">
								<div class="counter">
								   <span class="quantity-counter1 highlight">0</span>
								   <h6 class="counter-details">Employees</h6>
								 </div>
							</div>
							<div class="col-md-3 col-xs-6">
								<div class="counter">
								   <span class="quantity-counter2 highlight">0</span>
								   <h6 class="counter-details">Location</h6>
								 </div>
							</div>
							<div class="col-md-3 col-xs-6">
								<div class="counter">
								   <span class="quantity-counter3 highlight">0</span>
								   <h6 class="counter-details">% Satisfaction</h6>
								 </div>
							</div>
							<div class="col-md-3 col-xs-6">
								<div class="counter">
								   <span class="quantity-counter4 highlight">0</span>
								   <h6 class="counter-details">Happy Customers</h6>
								 </div>
							</div>
						</div>
					</div>
				</div><!-- / CONTAINER -->
			</div><!-- / FUNFACTS -->
            
			
			
			<!-- DIFFERENT SERVICES -->
            <section class="different-services text-center parallax">
				<div class="container">
					<div class="heading animate bounceIn">
						<h1 class="color-white">We Love What We Do</h1>
						<p class="color-white">Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
					</div>
				</div>
			</section><!-- / DIFFERENT SERVICES -->
			
			
			
			<!-- WHO IS BEHIND -->
            <section class="bg-blue">
				<div class="container">
					<div class="services text-center">
						<div class="three-items-carousel owl-carousel">
							<div class="service-box">
								<i class="icon-img-1"></i>
								<h4>Advisor</h4>
								<p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
							</div>
							<div class="service-box">
								<i class="icon-img-6"></i>
								<h4>Business Consulting</h4>
								<p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
							</div>
							<div class="service-box">
								<i class="icon-img-7"></i>
								<h4>Travel and Aviation</h4>
								<p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
							</div>
							
							<div class="service-box animate fadeInUp">
								<i class="icon-img-8"></i>
								<h4>Consumer Consulting</h4>
								<p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
							</div>
							<div class="service-box animate fadeInUp" data-delay="100">
								<i class="icon-img-2"></i>
								<h4>Save Money</h4>
								<p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
							</div>
							<div class="service-box animate fadeInUp" data-delay="200">
								<i class="icon-img-3"></i>
								<h4>Secure Future</h4>
								<p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
							</div>
							<div class="service-box">
								<i class="icon-img-4"></i>
								<h4>Private Consulting</h4>
								<p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
							</div>
							<div class="service-box">
								<i class="icon-img-5"></i>
								<h4>Financial Planning</h4>
								<p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
							</div>
							
							<div class="service-box">
								<i class="icon-img-9"></i>
								<h4>Online Consulting</h4>
								<p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 animate fadeInLeft">
							<ul class="image-list-classic ">
								<li><img src="{{asset('template')}}/images/who-is-behind-img1.jpg" alt=""></li>
								<li><img src="{{asset('template')}}/images/who-is-behind-img2.jpg" alt=""></li>
							</ul>
						</div>
						<div class="col-md-6 animate fadeInRight">
							<h3>Who is behind the best brok</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. </p>
							
							
							<div id="accordion" role="tablist" aria-multiselectable="true">
								<div class="toggle">
									<div class="toggle-heading" role="tab">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										  <i class="fa fa-plus"></i> What is do i have to tell you a few lorem?
										</a>
									</div>
									<div id="collapseOne" class="panel-collapse collapse" role="tabpanel">
										<div class="toggle-body">
											<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
										</div>
									</div>
								</div>
								<div class="toggle">
									<div class="toggle-heading" role="tab">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
										  <i class="fa fa-minus"></i> Insight and fun facts every time
										</a>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel">
										<div class="toggle-body">
											<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
										</div>
									</div>
								</div>
								<div class="toggle" >
									<div class="toggle-heading" role="tab">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
										  <i class="fa fa-plus"></i> What is do i have to tell you a few lorem?
										</a>
									</div>
									<div id="collapseThree" class="panel-collapse collapse" role="tabpanel">
										<div class="toggle-body">
											<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
										</div>
									</div>
								</div>
								<div class="toggle" >
									<div class="toggle-heading" role="tab">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
										  <i class="fa fa-plus"></i> What is do i have to tell you a few lorem?
										</a>
									</div>
									<div id="collapseFour" class="panel-collapse collapse" role="tabpanel">
										<div class="toggle-body">
											<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section><!-- / WHO IS BEHIND -->
			
			
			
			
			<div class="contact-us-bar">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<h4 class=" animate fadeInLeft">If you have any querry for related investment... We are available</h4>
						</div>
						<div class="col-md-3">
							<div class="text-right">
								<a href="{{route('contact-us')}}" class="btn btn-primary get-in-touch animate fadeInRight" data-text="Contact us"><i class="icon-telephone114"></i>Contact us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<!-- MEET OUR ADVISORS -->
            <section class="meet-our-advisors">
				<div class="container">
					<div class="heading text-center animate bounceIn">
						<h2>Meet Our Advisors</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
					</div>
					
					<div class="single-item-carousel owl-carousel classic-arrows">
						<div class="row">
							<div class="col-md-5 animate fadeInLeft"><img src="{{asset('template')}}/images/meet-our-advisors-img1.jpg" alt=""></div>
							<div class="col-md-7 animate fadeInRight">
								<div class="meet-advisors-content">
									<h3>David Fernando<span>Founder & CEO</span></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you. Lorem ipsum dolor sit amet. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
									<ul class="social-text">
										<li><a href="#." class="facebook">facebook</a></li>
										<li><a href="#." class="twitter">twitter</a></li>
										<li><a href="#." class="youtube">youtube</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5"><img src="{{asset('template')}}/images/meet-our-advisors-img2.jpg" alt=""></div>
							<div class="col-md-7">
								<div class="meet-advisors-content">
									<h3>Ashley Hardy<span>Chief Marketing Officer</span></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you. Lorem ipsum dolor sit amet. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
									<ul class="social-text">
										<li><a href="#." class="facebook">facebook</a></li>
										<li><a href="#." class="twitter">twitter</a></li>
										<li><a href="#." class="youtube">youtube</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5"><img src="{{asset('template')}}/images/meet-our-advisors-img3.jpg" alt=""></div>
							<div class="col-md-7">
								<div class="meet-advisors-content">
									<h3>Fernando Torres<span>Administrator</span></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you. Lorem ipsum dolor sit amet. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
									<ul class="social-text">
										<li><a href="#." class="facebook">facebook</a></li>
										<li><a href="#." class="twitter">twitter</a></li>
										<li><a href="#." class="youtube">youtube</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section><!-- / MEET OUR ADVISORS -->
			
			
			<!-- TESTIMONIALS -->
            <section class="bg-blue">
				<div class="container">
					<div class="heading text-center animate bounceIn">
						<h2>Happy Customers</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="testimonial animate fadeInUp">
								<div class="testimonial-content">
									<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="testimonials-author">
											<img class="img-circle" src="{{asset('template')}}/images/review-author-img.png" alt="">
											<p>Boris Hunt<span>(Sales Agent)</span></p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="text-right">
											<ul class="rating">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="testimonial animate fadeInUp" data-delay="100">
								<div class="testimonial-content">
									<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="testimonials-author">
											<img class="img-circle" src="{{asset('template')}}/images/review-author-img.png" alt="">
											<p>Boris Hunt<span>(Sales Agent)</span></p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="text-right">
											<ul class="rating">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center">
						<a class="btn btn-bordered-dark cd-see-all iconic animate fadeInUp" data-delay="200" href="javascript:void(0);" data-text="View All"><i class="icon-img-grid"></i>View All</a>
					</div>
				</div>
				
				<div class="cd-testimonials-all">
					<div class="cd-testimonials-all-wrapper">
						<ul>
							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="{{asset('template')}}/images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="{{asset('template')}}/images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="{{asset('template')}}/images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="{{asset('template')}}/images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="{{asset('template')}}/images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="{{asset('template')}}/images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="{{asset('template')}}/images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="{{asset('template')}}/images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="{{asset('template')}}/images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="{{asset('template')}}/images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="{{asset('template')}}/images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="{{asset('template')}}/images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>

					<a href="javascript:void(0);" class="close-btn">Close</a>
					
				</div>
				
			</section><!-- / BENIFITS -->
			
			
			
			<!-- REQUEST A CALLBACK -->
            <section>
				<div class="container">
					<div class="request-a-callback clearfix animate fadeInUp">
						<div class="request-a-callback-content">
							<h3>Request a Call Back</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut.</p>
							<p><strong>For Investment:</strong> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem or phone +11 987 654 3210 ipsum quia dolor sit amet, consectetur.</p>
						</div>
						<div class="request-a-callback-form">
							<form>
								<input type="text" placeholder="Your Name">
								<input type="text" placeholder="Email Address">
								<input type="text" placeholder="Phone Number">
								<div class="styled-select">
									<select>
										<option>I would like to discuss:</option>
										<option>Personal Finance</option>
										<option>Stock trading</option>
										<option>Retirement</option>
										<option>Other</option>
									</select>
								</div>
								<button data-text="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</section>
@endsection