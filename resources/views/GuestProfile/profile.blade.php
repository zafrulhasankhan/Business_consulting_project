@extends('template-layouts.app')
@section('content')
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('GuestProfile')}}/style.css" />
</head>


<?php

use App\Models\profileComplete;
use App\Models\User;
$data1 = User::where(['id'=>$id])->get()->first();
$data2 = profileComplete::where(['user_id' =>$id])->get()->first();

?>

  <section class="subpage-header">
				    <div class="container">
					  <div class="site-title clearfix">
						<h2>{{$data1->name}}'s Profile</h2>
						<ul class="breadcrumbs">
							<li><a href="{{route('home')}}">Dashboard</a></li>
							<li>{{$data1->name}}'s Profile</li>
						</ul>
					</div>
					<a href="{{route('contact-us')}}" class="btn btn-primary get-in-touch" data-text="Contact us"><i class="icon-telephone114"></i>Contact us</a>
				</div>
			</section>

<section>
    <div class="card">
        <div class="card-header">
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <img src="{{ $data1->profile_photo_url }}" alt="Profile Image" class="profile-img">
        @endif
        </div>
        <div class="card-body">
            <p class="full-name" style="text-align: center;">{{$data1->name}}</p>
            <p class="email" style="text-align: center;">{{$data1->email}}</p> <br><br>

             
            <div class="des">
            

            <div class="projects">
               <h3>Role as </h3>
               <p>
               @if($data1->role_num == '1')
                 Entrepreneur
               @endif
               @if($data1->role_num == '2')
                 StartUp
               @endif
               @if($data1->role_num == '3')
                 Small Business
               @endif
               @if($data1->role_num == '4')
                 Investor
               @endif
               </p>
             </div>
          @empty(!$data2)
            @empty(!$data2->idea)
            <div class="projects">
              <h3>Business idea</h3>
              <p>{{$data2->idea}}</p>
            </div>
           @endempty
             @empty(!$data2->qualification)
              <div class="projects">
                <h3>Qualification</h3>
                 <p>{{$data2->qualification}}</p>
              </div>
             @endempty

             @empty(!$data2->ambition)
              <div class="projects">
                <h3>Ambition</h3>
                 <p>{{$data2->ambition}}</p>
              </div>
             @endempty

             @empty(!$data2->creativity)
              <div class="projects">
                <h3>Creativity</h3>
                 <p>{{$data2->creativity}}</p>
              </div>
             @endempty

             @empty(!$data2->finance_startup)
              <div class="projects">
                <h3>Finance of startup</h3>
                 <p>{{$data2->finance_startup}}</p>
              </div>
             @endempty

             @empty(!$data2->invest_money)
              <div class="projects">
                <h3>Invest money</h3>
                 <p>{{$data2->invest_money}}</p>
              </div>
             @endempty

             @empty(!$data2->smallBusiness_plan)
              <div class="projects">
                <h3>Small Business Plan</h3>
                 <p>{{$data2->$data2->smallBusiness_plan}}</p>
              </div>
             @endempty

             @empty(!$data2->experience)
              <div class="projects">
                <h3>Experience</h3>
                 <p>{{$data2->experience}}</p>
              </div>
             @endempty

             @empty(!$data2->file)
              <div class="projects">
                <h3>Download document</h3><br>
                 <p><a title="Click for Download Now" style="background: green;color:white;padding:10px 20px;border-radius:10px" href="{{route('download',['file'=>$data2->file])}}">{{$data2->file}} &ensp;<i class="fa fa-download"></i></a></p>
              </div>
             @endempty
@endempty
   <!--
                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon tumblr"><i class="fab fa-tumblr"></i></a>
                <a href="#" class="social-icon youtube"><i class="fab fa-youtube"></i></a>
                <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="social-icon google-plus"><i class="fab fa-google-plus"></i></a>
-->
        </div>
        <div class="card-footer" style="text-align: center;">

        <div class="height-20"></div>
							<ul class="social">
								<li class="animate bounceIn"><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
								<li class="animate bounceIn" data-delay="100"><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
								<li class="animate bounceIn" data-delay="200"><a href="#." class="google-plus"><i class="icon-google"></i></a></li>
								<li class="animate bounceIn" data-delay="300"><a href="#." class="linkedin"><i class="icon-linkedin3"></i></a></li>
							</ul>
        </div>
    </div><br>
    </div>
    </section>
    
    @endsection