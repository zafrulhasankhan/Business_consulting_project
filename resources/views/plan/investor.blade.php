@extends('template-layouts.app')
@section('content')

<head>
<link rel="stylesheet" href="{{asset('profile-complete')}}/style1.css">
<title>Investor</title>

</head>
      <?php
         use App\Models\profileComplete;
         use Illuminate\Support\Facades\Auth;
         $profile = profileComplete::where(['user_id'=>Auth::user()->id])->get();
         $profileCount = count($profile);
	   ?>
        <section class="subpage-header">
				    <div class="container">
					  <div class="site-title clearfix">
						<h2>Investor</h2>
						<ul class="breadcrumbs">
							<li><a href="{{route('home')}}">Dashboard</a></li>
							<li>Investor</li>
						</ul>
					</div>
					<a href="{{route('contact-us')}}" class="btn btn-primary get-in-touch" data-text="Contact us"><i class="icon-telephone114"></i>Contact us</a>
				</div>
			</section>
            
            
			@if(!$profileCount)
			<section>
              <div class="progress__container">
             <div class="progress__bar" id="comment" style="text-align: center;color:white;font-size:13px;font-weight:bold">Profile 50% complete</div>
            </div>

             <div class="container2">
             
		      <div class="inner">
           
            
            <div class="user-form">
            <h4 style="text-align: center;">Profile Completion</h4>
                
            <form method="post" action="{{route('profile-complete')}}" enctype="multipart/form-data">
                @csrf  
                    <textarea name="aboutme" class="input" id="" cols="30" rows="10" placeholder="Describe yourself here... " required ></textarea> 
 
                    <textarea name="qualification" class="input" id="" cols="30" rows="10" placeholder="Educational qualification and others" required ></textarea>
                    <textarea name="idea" class="input" id="" cols="30" rows="10" placeholder="Enter your idea" required ></textarea>
                    <textarea name="invest_money" class="input" id="" cols="30" rows="10" placeholder="Amount of invest money and related info." required ></textarea>
                    <textarea name="require_revenue" class="input" id="" cols="30" rows="10" placeholder="Require Potential revenue... " required ></textarea> 
 
                    <textarea name="experience" class="input" id="" cols="30" rows="10" placeholder="Experience and Skills" required ></textarea>
                    
                    <div class="file">
                       <strong style="margin-left:-53%; font-size:14px">Portfolio Document :</strong>
                      <input type="file" id="upload-box" class="input" name="file" placeholder="Qualification">
                    </div>
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
              This is the investor content page . now you can work as investor plan.
          </div>
           
        </section>
		  @endif 

@endsection