@extends('template-layouts.app')

@section('content')
<head>
<title>Experience</title>
  <style>
    .card{
		width: 100%;
		height: 250px;
		display: inline-block;
        background-color: rgb(214, 214, 218);
        border-radius: 5px; 
        margin: 2%;
	}
	.card h3{
		padding: 10px;
		justify-content: center;
	}
  </style>
</head>
         
		 <section class="subpage-header">
				<div class="container">
					<div class="site-title clearfix">
						<h2>Experience</h2>
						<ul class="breadcrumbs">
						@auth
							<li><a href="{{route('dashboard')}}">Dashboard</a></li>
						@endauth
						@guest
							<li><a href="{{route('home')}}">Home</a></li>
						@endguest
							<li>Experience</li>
						</ul>
					</div>
					<a href="{{route('contact-us')}}" class="btn btn-primary get-in-touch" data-text="Contact us"><i class="icon-telephone114"></i>Contact us</a>
				</div>
			</section>
            
            
			
            <section class="bg-blue">
		     <div class="card">
               <h3 style="font-weight: bold;text-align:center"> This is 'Experience' page . Now you can add your 'Experience'</h3>
			 </div>
			</section>
@endsection