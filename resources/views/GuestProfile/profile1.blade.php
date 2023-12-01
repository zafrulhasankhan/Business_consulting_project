@extends('template-layouts.app')
@section('content')

<head>
<link rel="stylesheet" type="text/css" href="{{asset('GuestProfile')}}/profile/style.css" />
<link rel="stylesheet" type="text/css" href="{{asset('GuestProfile')}}/profile/tab.css" />
<title>User Profile</title>
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
						<h2> {{$data1->name}}'s Profile</h2>
						<ul class="breadcrumbs">
							<li><a href="{{route('dashboard')}}">Dashboard</a></li>
							<li>{{$data1->name}}'s Profile</li>
						</ul>
					</div>
					<a href="{{route('contact-us')}}" class="btn btn-primary get-in-touch" data-text="Contact us"><i class="icon-telephone114"></i>Contact us</a>
				</div>
			</section>


      <section class="bg-blue"  style="text-align: center;">
      <div class="center">
           <div class="container" style="margin-top: -5%;text-align:center; justify-content:center;align-items:center">
             <div class="main-body" style="text-align:center; justify-content:center;align-items:center">
           
               <div class="row gutters-sm">
               <div class="col-md-9 ">
                    <div class="card" style="background: black;">
                    <div class="card-body">
                   @if($data1->role_num == '1')
                      <img src="{{asset('GuestProfile/img')}}/entrepreneur.png" alt="" width="100%" height="150px">
                         @endif
                         @if($data1->role_num == '2')
                         <img src="{{asset('GuestProfile/img')}}/startup.png" alt="" width="100%" height="170px">
                         @endif
                         @if($data1->role_num == '3')
                         <img src="{{asset('GuestProfile/img')}}/smallbusi.png" alt="" width="100%" height="170px">
                         @endif
                         @if($data1->role_num == '4')
                         <img src="{{asset('GuestProfile/img')}}/investor.png" alt="" width="100%" height="150px">
                         @endif
                         
                      </div>
                    </div>
                    <div class="card" id="card">
                      <div class="card-body" id="card-body">
                       <div class="d-flex flex-column align-items-center text-center">
                       @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                          <img class="profile-img" src="{{ $data1->profile_photo_url }}" alt="Admin" class="rounded-circle" width="190">
                       @endif
                        </div>
                       <div class="info1">
                         <h4 style="font-weight: bold;">{{$data1->name}}</h4>
                         <p class="text-secondary mb-3"><i class="fa fa-envelope" style="color: rgb(219, 51, 51);"></i>&ensp; {{$data1->email}}</p>
                         <p class="text-black font-size-sm">
                         MemberShip - 
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
            
                
               <div class="right">
      
               <div class="address">
                  <h6>
                       <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank"><button>Send Email</button></a>
                       <a href="{{route('contact-us')}}" target="_blank"><button class="button2">More ...</button></a>
                 </h6>  <br>
                  <h4>Address</h4>
                  <p>{{$data1->address}}</p>
                </div>
                <div class="card-footer">
               <ul class="social">
                   <li class="animate bounceIn"><a target="_blank" href="http://www.facebook.com/" class="facebook"><i class="icon-facebook-1"></i></a></li>
                   <li class="animate bounceIn" data-delay="100"><a target="_blank" href="http://twitter.com/" class="twitter"><i class="icon-twitter-1"></i></a></li>
                   <li class="animate bounceIn" data-delay="200"><a target="_blank" href="https://github.com/" class="google-plus"><i class="icon-github"></i></a></li>
                   <li class="animate bounceIn" data-delay="300"><a target="_blank" href="https://www.linkedin.com/" class="linkedin"><i class="icon-linkedin3"></i></a></li>
                </ul>
              </div>
               </div>
               
              </div>
                    </div>
               </div>

           <div class="col-md-9 mb-3">
           <div class="height-200" style="padding: 6px;"></div>
           @empty(!$data2)       
             @empty(!$data2->aboutme)
                  
                   <div class="card mb-3">
                   <div class="card-body" id="sec_col">
                       <div class="d-flex flex-column align-items-center text-center">
                           <h5>About me</h5>
                        </div>
                       <div class="info" >
                          {{$data2->aboutme}}
                      </div><br>
                    </div>
                  </div>
                  @endempty  


                 
                  @empty(!$data2->intro_owner)
                  <div class="height-200" style="padding: 0px;"></div>
                  <div class="card mb-3">
                  <div class="card-body" id="sec_col">
                      <div class="d-flex flex-column align-items-center text-center">
                          <h5>Introduction of Owner</h5>
                       </div>
                      <div class="info" >
                         {{$data2->intro_owner}}
                     </div><br>
                   </div>
                 </div>
                 @endempty  


    

                  @empty(!$data2->staff)
                  <div class="height-200" style="padding: 1px;"></div>
                  <div class="card mb-3">
                  <div class="card-body" id="sec_col">
                      <div class="d-flex flex-column align-items-center text-center">
                          <h5>Number of staff and related data.</h5>
                       </div>
                      <div class="info" >
                         {{$data2->staff}}
                     </div><br>
                   </div>
                 </div>
                 @endempty  


              
              <div class="height-200" style="padding: 1px;"></div>
              @empty(!$data2->qualification)
              <div class="card">
                      <div class="card-body" id="sec_col">
                       <div class="d-flex flex-column align-items-center text-center">
                           <h5>Educational Qualification</h5>
                        </div>
                       <div class="info">
                         {{$data2->qualification}}
                      </div><br>
                </div>
              </div>
              @endempty
          
                  </div>


             
  <div class="col-md-9">
 
                  @empty(!$data2->idea)
                  <div class="height-200" style="padding: 1px;"></div>
                   <div class="card mb-3">
                   <div class="card-body" id="sec_col">
                       <div class="d-flex flex-column align-items-center text-center">
                           <h5>Business idea and Goals</h5>
                        </div>
                       <div class="info" >
                          {{$data2->idea}}
                      </div><br>
                    </div>
                  </div>
                  @endempty

             

                  <div class="height-200" style="padding: 1px;"></div>
                  
                  <div class="card mb-3">
                  <div class="card-body" id="sec_col">
                       <div class="d-flex flex-column align-items-center text-center">
                           <h5> 
                            @empty(!$data2->drive_you)
                             What I drive as a team member
                            @endempty
                            @empty(!$data2->invest_money)
                             Invest money and related info.
                            @endempty
                            @empty(!$data2->smallBusiness_plan)
                             Business work , sell and its offer
                            @endempty
                            @empty(!$data2->creativity)
                             Creativity
                            @endempty
                           </h5>
                        </div>
                       <div class="info" >
                            @empty(!$data2->drive_you)
                             {{$data2->drive_you}}
                            @endempty
                            @empty(!$data2->invest_money)
                             {{$data2->invest_money}}
                            @endempty
                            @empty(!$data2->smallBusiness_plan)
                             {{$data2->smallBusiness_plan}}
                            @endempty
                            @empty(!$data2->creativity)
                             {{$data2->creativity}}
                            @endempty
                      </div><br>
                </div>
                  </div>
                  <div class="height-200" style="padding: 1px;"></div>
                

                  <div class="card mb-3" >
                  <div class="card-body" id="sec_col">
                       <div class="d-flex flex-column align-items-center text-center">
                           <h5>
                            @empty(!$data2->experience)
                             Experience and Skills
                            @endempty
                            @empty(!$data2->ambition)
                             Ambition and Motivation
                            @endempty
                           </h5>
                        </div>
                       <div class="info" >
                            @empty(!$data2->experience)
                             {{$data2->experience}}
                            @endempty
                            @empty(!$data2->ambition)
                             {{$data2->ambition}}
                            @endempty
                      </div><br>
              
                </div>
                  </div>

                  @empty(!$data2->potential_revenue)
                  <div class="height-200" style="padding: 6px;"></div>
                   <div class="card mb-3">
                   <div class="card-body" id="sec_col">
                       <div class="d-flex flex-column align-items-center text-center">
                           <h5>Potential revenues and related info.</h5>
                        </div>
                       <div class="info" >
                          {{$data2->potential_revenue}}
                      </div><br>
                    </div>
                  </div>
                  @endempty  

                  <div class="height-200" style="padding: 1px;"></div>
                  @empty($data2->invest_money)
                  <div class="card mb-3">
                  
                      <div class="card-body">
                      <div class="col-md-6" style="text-align: center;">
                      <div class="card-body" id="sec_col">
                       <div class="d-flex flex-column align-items-center text-center">
                           <h5>Amount of current finance</h5>
                        </div>
                       <div class="info" >
                          {{$data2->current_finance}}
                      </div><br>
                    </div>
                      </div>
                      
                       
                      <div class="col-md-6">
                      <div class="card-body" id="sec_col">
                       <div class="d-flex flex-column align-items-center text-center">
                           <h5>
                           @empty(!$data2->needed_finance)
                            Amount of needed finance
                           @endempty
                           @empty(!$data2->capacity_finance)
                           Needed capacity level of finance
                           @endempty
                           </h5>
                        </div>
                       <div class="info" >
                          @empty(!$data2->needed_finance)
                            {{$data2->needed_finance}}
                           @endempty
                           @empty(!$data2->capacity_finance)
                           {{$data2->capacity_finance}}
                           @endempty
                      </div><br>
                    </div>
                      </div>
                      </div>
            
                  </div>
                  @endempty

                  @empty(!$data2->require_revenue)
                  <div class="height-200" style="padding: 1px;"></div>
                  <div class="card mb-3">
                  <div class="card-body" id="sec_col">
                      <div class="d-flex flex-column align-items-center text-center">
                          <h5>Requirement of potential revenues</h5>
                       </div>
                      <div class="info" >
                         {{$data2->require_revenue}}
                     </div><br>
                   </div>
                 </div>
                 @endempty  

                  <div class="height-200" style="padding: 1px;"></div>

                 
                  @empty(!$data2->file)
                  <div class="card mb-3">
                    <div class="card-body" style="text-align: center;margin-bottom:20px">
                      <h2 style="font-size: 20px;padding:10px;font-weight:600;text-align:left;font-family:serif" ><u> Presentation Document</u></h2><br>
                     <!-- <p><a title="Click for Download Now" style="background: green;color:white;padding:10px 20px;border-radius:10px" href="{{route('download',['file'=>$data2->file])}}">{{$data2->file}} &ensp;<i class="fa fa-download"></i></a></p>
                    -->
                   <div class="present">
                     
                   <div class="icon">
                     @if($data2->extension === 'docx')
                         <i class="fa fa-file-word-o" style="font-size:55px; color:rgb(70, 70, 172)"></i>
                      @endif
                     @if($data2->extension === 'pdf')
                        <i class="icon-file-pdf" style="font-size:55px; color:rgb(228, 38, 38)"></i>
                         
                      @endif
                      @if($data2->extension === 'pptx')
                      <i class="fa fa-file-powerpoint-o" style="font-size:55px; color:brown"></i>
                      @endif
                      @if($data2->extension === 'MKV')
                      <i class="fa fa-file-video-o" style="font-size:55px; color:rgb(42, 42, 134)"></i>
                      @endif
                   </div>
                   <div class="file-data">
                     <p>{{$data2->file}}</p>
                     <p class="size">{{round(($data2->filesize)/1026),2}} MB</p>
                     
                   </div><br>
                   <a title="Click for Download Now" class="dow_button" href="{{route('download',['file'=>$data2->file])}}">Download Now &ensp;<i class="fa fa-download"></i></a>
                     
                    </div>
                  </div>
                  </div>
                @endempty
                  

                </div>
                @endempty
        </div>
    </div>
           </div>
      </div>
</section> 
<body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('GuestProfile')}}/profile/tab.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
       
</body>
@endsection 