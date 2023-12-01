@extends('template-layouts.app')

@section('content')
<head>
<title>
   Get Started
</title>
<link rel="stylesheet" href="{{asset('css')}}/card.css">
</head>
          <section class="subpage-header">
				<div class="container">
					<div class="site-title clearfix">
						<h2>Get Started</h2>
						<ul class="breadcrumbs">
							<li><a href="{{route('home')}}">Home</a></li>
							<li>Get Started</li>
						</ul>
					</div>
					<a href="{{route('contact-us')}}" class="btn btn-primary get-in-touch" data-text="Contact us"><i class="icon-telephone114"></i>Contact us</a>
				</div>
			</section>
            
            
			
            <section class="bg-blue">
    
            <div class="main">
            
  <h2 style="text-align: center;font-size:23px"><u><b>Choose a MemberShip</b></u></h2>
<!--cards -->

<div class="card" style="background:#00838f;color:white">

<div class="image">
  <img src="{{asset('cardPhoto')}}/entrepreneur.jpg">
</div>
<div class="title">
<h1 style="color: white;"><b>Entrepreneur</b></h1>
</div>
<div class="des">
<p>Click the below button for register as <b>Entrepreneur</b></p>
<a href="{{route('registerPage',['role_id'=> 1])}}"><button>Get Started</button></a>
</div>
</div>
<!--cards -->


<div class="card" style="background:#283593;color:white">

<div class="image">
  <img src="{{asset('cardPhoto')}}/startup.jpg">
</div>
<div class="title">
<h1 style="color: white;">
<b>Start Up</b></h1>
</div>
<div class="des">
<p>Click the below button for register as <b>Start Up</b></p>
<a href="{{route('registerPage',['role_id'=> 2])}}"><button>Get Started</button></a>
</div>
</div>
<!--cards -->


<div class="card" style="background:#195070;color:white">

<div class="image">
  <img src="{{asset('cardPhoto')}}/small business.jpg">
</div>
<div class="title">
<h1 style="color: white;">
<b>Small Business</b></h1>
</div>
<div class="des">
<p>Click the below button for register as <b>Small Business</b></p>
<a href="{{route('registerPage',['role_id'=> 3])}}"><button>Get Started</button></a>
</div>
</div>
<!--cards -->


<div class="card" style="background:#1565c0;color:white">

<div class="image">
  <img src="{{asset('cardPhoto')}}/investor.jpg">
</div>
<div class="title">
<h1 style="color: white;">
<b>Investor</b></h1>
</div>
<div class="des">
<p>Click the below button for register as <b>Investor</b></p>
<a href="{{route('registerPage',['role_id'=> 4])}}"><button>Get Started</button></a>
</div>
</div>
<!--cards -->

<!--cards -->


<!--cards -->



</div>
            </section>
      
      </div>
  </div> 
                    
            
			</section><!-- / WHO IS BEHIND -->
			

			<!-- CONTACT US -->
           

@endsection