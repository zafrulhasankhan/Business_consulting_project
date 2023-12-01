@extends('template-layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href="{{asset('GuestProfile')}}/card.css">
    <title>All User</title>
</head>
<!-- retrieve data from db -->
<?php

use App\Models\profileComplete;
use App\Models\User;

$data1 = User::get();

?>

   <section class="subpage-header">
				<div class="container">
					<div class="site-title clearfix">
						<h2>User Profile</h2>
						<ul class="breadcrumbs">
							<li><a href="{{route('dashboard')}}">dashboard</a></li>
							<li>User Profile</li>
                            
						</ul>
					</div>
					<a  href="{{route('contact-us')}}" class="btn btn-primary get-in-touch" data-text="Contact us"><i class="icon-telephone114"></i>Contact us</a>
				</div>
	</section>

    <section>
       <div class="main">
       @foreach ($data1 as $data)
          <div class="card">
              <div class="image">
                  
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                 <img src="{{ $data->profile_photo_url }}" alt="" >
                @endif
                </div>
            <div class="title">
              <h1>{{$data->name}}</h1>
              <p style="font-size: 14px;">{{$data->email}}</p>
              
            </div>
           <div class="des">
             <p>
                @if($data->role_num == '1')
                 Entrepreneur
                 @endif
                @if($data->role_num == '2')
                 StartUp
                 @endif
                @if($data->role_num == '3')
                 Small Business
                 @endif
                @if($data->role_num == '4')
                 Investor
                 @endif

             </p>
             <a   href="{{route('user-profile',['id' =>$data->id])}}"><button>Show profile</button></a>
           </div>
        </div>
       
        @endforeach


      </div>

    </section>
            


@endsection