@extends('template-layouts.app')

@section('content')
<head>
    <style>
* {
  box-sizing: border-box;
}
.btn{
  background: #09a223;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 20px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
    
  
  padding: 16px;
  text-align: center;
  background-color: rgb(214, 214, 218);
}
.card:hover {
  transform: scale(1.05);
  
}
    </style>
</head>
<section class="subpage-header">
				<div class="container">
					<div class="site-title clearfix">
						<h2>Contact Us</h2>
						<ul class="breadcrumbs">
							<li><a href="#.">Home</a></li>
							<li>Get Started</li>
						</ul>
					</div>
					<a href="contact-us.html" class="btn btn-primary get-in-touch" data-text="Contact us"><i class="icon-telephone114"></i>Contact us</a>
				</div>
			</section>
            
            
			
            <section class="bg-blue">
<h4 style="text-align: center;font-weight:bold">Choose a Plan</h4><br>
<div class="row">
  <div class="column">
    <div class="card">
      <h3 style="color: green;">$299/m<h3>
      <p style="font-weight:bold; font-size:19px">Entrepreneur Plan </p><br>
      <p style="font-size: 15px;">12 hours per month</p>
      <p style="font-size: 15px;">1 user included</p>
      <a href="{{route('registerPage',['role_id'=> 1])}}"><button class="btn btn-primary" data-text="Get Started">Get Started</button></a>
    </div>
  </div>

  <div class="column">
  <div class="card">
      <h3 style="color: green;">$599/m<h3>
      <p style="font-weight:bold; font-size:19px">Startup Plan </p><br>
      <p style="font-size: 15px;">24 hours per month</p>
      <p style="font-size: 15px;">2 user included</p>
      <a href="{{route('registerPage',['role_id'=> 2])}}"><button class="btn btn-primary" data-text="Get Started">Get Started</button></a>
    </div>
  </div>
  
  <div class="column">
  <div class="card">
      <h3 style="color: green;">$899/m<h3>
      <p style="font-weight:bold; font-size:19px">Small Business Plan </p><br>
      <p style="font-size: 15px;">36 hours per month</p>
      <p style="font-size: 15px;">3 user included</p>
      <a href="{{route('registerPage',['role_id'=> 3])}}"><button class="btn btn-primary" data-text="Get Started">Get Started</button></a>
    </div>
  </div>
  
  <div class="column">
  <div class="card">
      <h3 style="color: green;">$1199/m<h3>
      <p style="font-weight:bold; font-size:19px">Team Plan </p><br>
      <p style="font-size: 15px;">50 hours per month</p>
      <p style="font-size: 15px;">5 user included</p>
      <a href="{{route('registerPage',['role_id'=> 4])}}"><button class="btn btn-primary" data-text="Get Started">Get Started</button></a>
    </div>
  </div>
</div>

            </section>
      
      </div>
  </div> 
                    
            
			</section><!-- / WHO IS BEHIND -->
			

			<!-- CONTACT US -->
           

@endsection