<header id="header" class="h-one-h">
            	
				<div class="container">
						
					<!-- TOP BAR -->
					<div class="top-bar clearfix">
						<p>We have over 15 years of experience.</p>
						<ul>
							<li><i class="icon-telephone114"></i> +1 900 234 567</li>
							<li><i class="icon-icons74"></i> 786 South Park Avenue</li>
							<li><i class="icon-icons20"></i> Mon to Sat 08:00 - 16:30</li>
						</ul>
					</div>
					<!-- / TOP BAR -->
					
					<!-- HEADER INNER -->
					<div class="header clearfix">
						
						<a href="index-2.html" class="logo"><img src="{{asset('template')}}/images/logo3.png" width="70%" alt=""></a>
						
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						
						
						<nav class="main-nav navbar-collapse collapse" id="primary-nav">
							<ul class="nav nav-pills">
							<li><a href="{{route('dashboard')}}">Dashboard</a>
									
								</li>

					    @can('manage-plan1')
						   <li>
                             <a href="{{ route('plan1.entrepreneur.index') }}" :active="request()->routeIs('plan1.entrepreneur.index')">
                                <b>{{ __('Entrepreneur') }}</b>
                            </a>
						  </li>
                        @endcan

                        @can('manage-plan2')
						<li>
                          <a href="{{ route('plan2.startup.index') }}" :active="request()->routeIs('plan2.startup.index')">
                           <b>{{ __('Start Up') }}</b>
                         </a>
						</li>
                        @endcan
                        @can('manage-plan3')
						<li>
                         <a href="{{ route('plan3.smallbusi.index') }}" :active="request()->routeIs('plan3.smallbusi.index')">
                          <b> {{ __('Small Business') }}</b>
                         </a>
						</li>
                        @endcan

                    @can('manage-plan4')
					<li>
                    <a href="{{ route('plan4.investor.index') }}" :active="request()->routeIs('plan4.team.index')">
                        <b>{{ __('Investor') }}</b>
                    </a>
					</li>
                    @endcan
								<li><a href="{{route('about-us')}}">About Us</a></li>
								

								<li class="dropdown"><a href="{{route('experience')}}">Experience</a>
								<li class="dropdown"><a href="{{route('alluser')}}">All User</a>
								<li class="dropdown"><a href="{{route('contact-us')}}">Contact Us </i></a>
									
								</li>
		
								<li class="dropdown">
								 <a href="#.">
								   <!--<b>{{ Auth::user()->name }}</b> <i class="fa fa-caret-down"></i>-->
								   @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
								   
                        <img class="h-10 w-10 rounded-full object-cover" style="height: 50px;width:50px;border-radius:50px"  src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
						<!--
						<img style="height: 50px;width:50px;border-radius:50px" src="{{asset('storage/profile-photos')}}/{{ basename(Auth::user()->profile_photo_url) }}" alt="{{ Auth::user()->name }}" />  
                         -->
			    @endif
								 </a>
									<ul class="dropdown-menu">
										<li><a href="{{route('profile.show')}}">Profile</a></li>
										<li>
											<form method="POST" action="{{ route('logout') }}">
                                             @csrf

                                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                               {{ __('Log Out') }}
                                            </x-jet-dropdown-link>
                                          </form>
										</li>
										
									</ul>
								</li>
								</li>
							</ul>
						</nav>
						
					</div><!-- / HEADER INNER -->
					
                </div><!-- / CONTAINER -->
				
            </header><!-- / HERDER -->
            
            <!-- HERDER -->
            <header id="header" class="header-two h-two-h" style="display:none;">
            	
				<!-- TOP BAR -->
				<div class="top-bar-simple clearfix">
					<div class="container">
						<p>We have over 15 years of experience.</p>
						<ul class="social">
							<li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
							<li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
							<li><a href="#." class="google-plus"><i class="icon-google"></i></a></li>
							<li><a href="#." class="linkedin"><i class="icon-linkedin3"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- / TOP BAR -->
				
				
				<div class="container">
					
					<!-- HEADER INNER -->
					<div class="header clearfix">
						
						<a href="index-2.html" class="logo"><img src="images/logo.png" alt=""></a>
						
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						
						
						
						<ul class="header-contact-widget clearfix">
							<li>
								<i class="icon-telephone114"></i>
								<p>+1 900 234 567<a href="mailto:support@advisor.com">support@advisor.com</a></p>
							</li>
							<li>
								<i class="icon-icons74"></i>
								<p>Manhattan Hall,<span>Advisor Melbourne, australia</span></p>
							</li>
							<li>
								<i class="icon-icons20"></i>
								<p>08:00 - 16:30<span>Monday to Saturday</span></p>
							</li>
						</ul>
						
						
					</div><!-- / HEADER INNER -->
					
					
					<nav class="main-nav navbar-collapse collapse" id="primary-nav">
						<ul class="nav nav-pills">
						<li><a href="{{route('home')}}">Home</a>
								
							</li>
							<li><a href="{{route('about-us')}}">About Us</a></li>
						
							<li class="dropdown"><a href="#.">Experience</a>
								
							</li>
							
							<li class="dropdown"><a href="{{route('contact-us')}}">Contact Us <i class="fa fa-caret-down"></i></a>
								
							</li>
							<li class="dropdown"><a href="#.">{{ Auth::user()->name }}<i class="fa fa-caret-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="{{route('services')}}">International Business Opportunities</a></li>
									<li><a href="{{route('services')}}">Local Business Opportunities</a></li>
									<li><a href="{{route('services')}}">Financial Services</a></li>
									<li><a href="{{route('services')}}">Strategic Planning</a></li>
									
								</ul>
							</li>
						</ul>
					</nav>
					
					
                </div><!-- / CONTAINER -->
				
            </header><!-- / HERDER -->
            
			
			<!-- HERDER -->
            <header id="header" class="header-three h-three-h" style="display:none;">
            	
				<div class="container-fluid">
					
					
					<!-- HEADER INNER -->
					<div class="header clearfix">
						
						<a href="index-2.html" class="logo"><img src="images/logo.png" alt=""></a>
						
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						<ul class="header-links clearfix">
							<li class="header-number"><a href="#."><i class="icon-phone4"></i>+1 900 234 567 - 68</a></li>
							<li class="header-time"><a href="#."><i class="icon-clock"></i>Mon to Sat 08:00 - 16:30</a></li>
							<li><a href="#." class="btn btn-primary btn-quote" data-text="Get a quote">Get a quote</a></li>
						</ul>
						
						<nav class="main-nav navbar-collapse collapse" id="primary-nav">
							<ul class="nav nav-pills">
							<li><a href="{{route('home')}}">Home</a>
									
								</li>
								<li><a href="{{route('about-us')}}">About Us</a></li>
								<li class="dropdown"><a href="#.">Services <i class="fa fa-caret-down"></i></a>
									<ul class="dropdown-menu">
									<li><a href="{{route('services')}}">International Business Opportunities</a></li>
									<li><a href="{{route('services')}}">Local Business Opportunities</a></li>
									<li><a href="{{route('services')}}">Financial Services</a></li>
									<li><a href="{{route('services')}}">Strategic Planning</a></li>
									
										
									</ul>
								</li>
								<li><a href="cases.html">Why Choose Us</a></li>
								
									
								</li>
								<li><a href="shop.html">Experience</a></li>
								<li class="dropdown"><a href="{{route('contact-us')}}">Contact Us</a>
									
								</li>
							</ul>
						</nav>
						
					</div><!-- / HEADER INNER -->
					
                </div><!-- / CONTAINER -->
				
            </header><!-- / HERDER -->
			