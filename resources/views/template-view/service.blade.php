@extends('template-layouts.app')

@section('content')

             <head>
			   <title>Services</title>
			 </head>
            
            <section class="subpage-header">
				<div class="container">
					<div class="site-title clearfix">
						<h2>Services</h2>
						<ul class="breadcrumbs">
							<li><a href="{{route('home')}}">Home</a></li>
							<li>Services</li>
						</ul>
					</div>
					<a href="contact-us.html" class="btn btn-primary get-in-touch" data-text="Contact us"><i class="icon-telephone114"></i>Contact us</a>
				</div>
			</section>
            
            
			
			<!-- SERVICES CONTENT -->
            <section>
				<div class="container">
					
					<div class="row">
						<div class="col-md-4 animate fadeInLeft">
							<aside>
								
								<ul class="left-nav">
									<li><a href="#.">Financial Planning <i class="fa fa-angle-right"></i></a></li>
									<li><a href="#.">Bonds &amp; Commodities <i class="fa fa-angle-right"></i></a></li>
									<li><a href="#." class="active">Turnaround Consulting <i class="fa fa-angle-right"></i></a></li>
									<li><a href="#.">Trades &amp; Stocks <i class="fa fa-angle-right"></i></a></li>
									<li><a href="#.">Investment Trusts <i class="fa fa-angle-right"></i></a></li>
									<li><a href="#.">Mutual Funds <i class="fa fa-angle-right"></i></a></li>
									<li><a href="#.">Retirement <i class="fa fa-angle-right"></i></a></li>
									<li><a href="#.">Strategic Planning <i class="fa fa-angle-right"></i></a></li>
								</ul>
								
								<div class="help-widget">
									<h5>how can we help you?</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor.</p>
									<a href="contact-us.html" class="btn btn-primary btn-white get-in-touch" data-text="Contact us"><i class="icon-telephone114"></i>Contact us</a>
								</div>
								
								<a href="#." class="company-presentation-link"><i class="icon-file-pdf-o"></i> Company Presentation</a>
								
								<div class="testimonial">
									<div class="testimonial-content">
										<h5>Testimonials</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									
										
									<div class="testimonials-author">
										<img class="img-circle" src="{{asset('template')}}/images/review-author-img.png" alt="">
										<p>Boris Hunt<span>(Sales Agent)</span></p>
									</div>
										
									
								</div>
								
							</aside>
						</div>
						<div class="col-md-8 animate fadeInRight">
							<div class="single-item-carousel classic-arrows2 owl-carousel">
								<img src="{{asset('template')}}/images/services-img1.jpg" alt="">
								<img src="{{asset('template')}}/images/services-img1.jpg" alt="">
								<img src="{{asset('template')}}/images/services-img1.jpg" alt="">
							</div>
							<br>
							<br>
							<p>We have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor xercitationemut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum nec risus et suscipit Curabitur metus ipsum. But I must explain to you how all this mistaken idea of denouncing.</p>
							<p>expound the actual teachings. of the great explorer of the truth, the master-builder of No one rejects, dislikes, or human happiness. </p>
							<br>
							<h3>Business plan market</h3>
							<p>Expound the actual teachings. of the great explorer of the truth, the master-builder of No one rejects, dislikes, or human happiness. </p>
							<br>
							
							<blockquote>
								<p>consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor xercitationemut labore</p>
							</blockquote>
							<br>
							<h3>Safety wealth</h3>
							
							<div class="row">
								<div class="col-md-6">
									<div class="chart-widget">
										<div id="chartContainer" style="height: 210px; width: 100%;"></div>
										<p>consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod.</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="chart-widget">
										<div id="chartContainer2" style="height: 210px; width: 100%;"></div>
										<p>consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod.</p>
									</div>
								</div>
							</div>
							<div class="height-30"></div>
							<div class="row">
								<div class="col-md-6">
									<div class="chart-widget">
										<div id="chartContainer3" style="height: 210px; width: 100%;"></div>
										<p>consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod.</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="chart-widget">
										<div id="chartContainer4" style="height: 210px; width: 100%;"></div>
										<p>consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod.</p>
									</div>
								</div>
							</div>
							<div class="height-50"></div>
							<h3>Business Strategy</h3>
							<div class="row">
								<div class="col-md-8">
									<p>We have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power.</p>
									<p>of consectetur adi pisi cing elit, sed do eiusmod tempor xercitationemut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum nec risus et suscipit Curabitur metus ipsum.</p>
								</div>
								<div class="col-md-4"><img src="{{asset('template')}}/images/services-img.jpg" alt=""></div>
							</div>
							<div class="height-50"></div>
							<h3>Business plan market</h3>
							<p>Expound the actual teachings. of the great explorer of the truth, the master-builder of No one rejects, dislikes, or human happiness. </p>

							
							
							<br>
							<div id="accordion" role="tablist" aria-multiselectable="true">
								<div class="toggle two" >
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
								<div class="toggle two">
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
								<div class="toggle two" >
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
								<div class="toggle two" >
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
							<div class="height-50"></div>
							<div class="row">
								<div class="col-md-6">
									<h3>Safety wealth</h3>
									<div class="chart-widget">
										<div id="chartContainer5" style="height: 210px; width: 100%;"></div>
										<p>consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod.</p>
									</div>
								</div>
								<div class="col-md-6">
									<h3>Business planning</h3>
									<ul class="list-bullets two">
										<li>There are many variations of passages</li>
										<li>Company and Industry Research</li>
										<li>Company and Industry Research</li>
										<li>Industry Research</li>
										<li>handful of model sentence structures</li>
										<li>Plombett – Industry Research</li>
										<li>market analysis report “slices”</li>
									</ul>
								</div>
							</div>
							<div class="height-50"></div>
							<h3>Enhance your Financial Portfolio</h3>
							<p>Expound the actual teachings. of the great explorer of the truth, the master-builder of No one rejects, dislikes, or human happiness. </p>
							
							<div class="height-20"></div>
							
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#investment" aria-controls="investment" role="tab" data-toggle="tab">Investment</a></li>
								<li role="presentation"><a href="#growth" aria-controls="growth" role="tab" data-toggle="tab">Growth</a></li>
								<li role="presentation"><a href="#risks-of-investing" aria-controls="risks-of-investing" role="tab" data-toggle="tab">Risks of Investing</a></li>
							 </ul>

							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="investment">
									<p>We have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor xercitationemut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<p>expound the actual teachings. of the great explorer of the truth, the  aster-builder of No one rejects, dislikes, or human happiness. </p>
								</div>
								<div role="tabpanel" class="tab-pane" id="growth">
									<p>expound the actual teachings. of the great explorer of the truth, the  aster-builder of No one rejects, dislikes, or human happiness. </p>
									<p>We have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor xercitationemut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
								<div role="tabpanel" class="tab-pane" id="risks-of-investing">
									<p>expound the actual teachings. of the great explorer of the truth, the  aster-builder of No one rejects, dislikes, or human happiness. </p>
								</div>
							</div>

						</div>
					</div>
					
				</div>
			</section>
			<!-- / SERVICES CONTENT -->
			
			
			@endsection