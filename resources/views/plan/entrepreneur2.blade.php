@extends('template-layouts.app')
@section('content')
<head>
    <link rel="stylesheet" href="{{asset('profile-complete')}}/style.css">
</head>

<!-- profile complete check -->
       <?php
         use App\Models\profileComplete;
         use Illuminate\Support\Facades\Auth;
         $profile = profileComplete::where(['user_id'=>Auth::user()->id])->get();
         $profileCount = count($profile);
	   ?>

           <section class="subpage-header">
				<div class="container">
					<div class="site-title clearfix">
						<h2>Entrepreneur</h2>
						<ul class="breadcrumbs">
							<li><a href="{{route('home')}}">Dashboard</a></li>
							<li>Entrepreneur</li>
						</ul>
					</div>
					<a href="{{route('contact-us')}}" class="btn btn-primary get-in-touch" data-text="Contact us"><i class="icon-telephone114"></i>Contact us</a>
				</div>
			</section>
        
        @if(!$profileCount)
        <section>
            <h4  style="text-align: center;">At first , We have to complete your profile</h4>
          <div class="progress__container">
            <div class="progress__bar" id="comment" style="text-align: center;color:white;font-size:13px;font-weight:bold">Profile 50% complete</div>
          </div>

             <div class="container2">
             
		   <div class="inner">
            <div class="photo">
                <img src="{{asset('cardPhoto')}}/entrepreneur.jpg">
            </div>
            
            <div class="user-form">
            <h4 style="text-align: center;">Profile Completion</h4>
                
            <form method="post" action="{{route('profile-complete')}}">
                 @csrf   
                    <input class="input" type="text" name="ambition" placeholder="Ambition" >
                    
                    <input type="text" class="input" name="creativity" placeholder="What is your Creativity" >
                    
                    <input type="text" class="input" name="qualification" placeholder="Qualification">
                    
                    <div class="action-btn" style="text-align: center;">
                        <button class="btn btn-primary" style="cursor: pointer; margin-top:10px;outline:none;" data-text="Submit"> Submit </button>
                        
                    </div>
                </form>
            </div>
        </div>
             </div>
           <script src="{{asset('profile-complete')}}/script.js"> </script>
		</section>

        @else
        @if(session()->has('success'))
							<p class="success" id="success">
							  <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;text-align:center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                  <strong> {{ session('success') }} </strong>
                               </div>
							</p>
							@endif
        <section>
          <div class="card">
              This is the Entrepreneur content page . now you can work as entrepreneur plan.
           
        </section>
		  @endif 
    
@endsection