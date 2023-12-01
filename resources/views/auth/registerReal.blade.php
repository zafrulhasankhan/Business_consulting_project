<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('template_login')}}/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    
    <title>Business Consulting </title>
</head>
<body>
    <section class="side">
        <!--<img src="{{asset('template_login')}}/images/img.svg" alt="">-->
        <!--<img src="{{asset('cardPhoto')}}/small business.jpg" alt="" style="border-radius:1200px;">-->
       
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">Register</p>
            <div class="separator"></div>
            
            <p class="welcome-message">Please, provide register credential as <b>
              @if($role==='1')
              Entrepreneur
              @endif
              @if($role==='2')
              Start Up
              @endif
              @if($role==='3')
              Small Business
              @endif
              @if($role==='4')
              Investor
              @endif
              </b>
            to proceed and have access to all our services</p>

            <form class="login-form" method="POST" action="{{ route('register') }}">
              @csrf
                <div class="form-control">
                    <input type="text" placeholder="Username" name="name" value="{{old('name')}}" required autofocus autocomplete="name">
                    <i class="fas fa-user"></i>
                    @error('name')
                    <div style="color: red;">
                       {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-control">
                    <input type="email" placeholder="Email"  name="email" value="{{old('email')}}" required>
                    <i class="fas fa-envelope"></i>
                    @error('email')
                    <div style="color: red;">
                       {{$message}}
                    </div>
                    @enderror
                </div>
                
                    <input type="text" placeholder="Email"  name="role_num" value="{{$role}}" hidden required>
                    
               
                 
                 <div class="form-control">
                    <input type="password" placeholder="Password" type="password" name="password"  required autocomplete="new-password">
                    <i class="fas fa-lock"></i>
                    @error('password')
                    <div style="color: red;">
                       {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-control">
                    <input type="password" placeholder=" Confirm Password" type="password" name="password_confirmation" required autocomplete="new-password">
                    <i class="fas fa-lock"></i>
                </div>
                

                <button class="submit" type="submit">Register</button>
                
                <!--
                <div class="social-media">
                    <a href="#" class="social-icon">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                      <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </div>
-->
            </form>
            <a href="{{route('home')}}" ><button class="btn btn-danger" style="font-size: 14px;">Back to home</button></a>
        </div>
    </section>
    
</body>
</html>