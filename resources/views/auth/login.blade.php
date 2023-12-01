<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{asset('register-asset')}}/style.css" />
    <title>Sign in</title>
  </head>
  <body>

  @empty($role)
  <?php
    $role='';
  ?>
  @endempty
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        <form action="{{route('login')}}" method="post" class="sign-in-form">
        @csrf
            <h2 class="title">Sign in</h2>
          
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email" name="email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            
          </form>
          <form action="{{route('register')}}" method="post" class="sign-up-form">
  
            @csrf
            <h2 class="title">Sign up</h2>
              <p>
              @empty(!$role) <br> Now you can able to sign up as 
              <b>
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
             
               @endempty
              
              </p>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="name" value="{{old('name')}}" required autofocus autocomplete="name"/>
              
            </div>
        
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" value="{{old('email')}}" required  />
            </div>
            <div class="input-field">
              <i class="fas fa-address"></i>
              <input type="text" placeholder="Address" name="address" value="{{old('address')}}" required  />
            </div>
            
              <input type="text" placeholder="role_num" name="role_num" value="{{$role}}"  hidden />
            
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"  required  autocomplete="new-password" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password_confirmation" required  autocomplete="new-password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
          @if(!$errors->any())
          <h3>
          <b>
          @if($role==='1')
          Membership - Entrepreneur
              @endif
              @if($role==='2')
              Membership - Start Up
              @endif
              @if($role==='3')
              Membership - Small Business
              @endif
              @if($role==='4')
              Membership - Investor
              @endif
              </b>
          </h3>
          @endif
            <p style="color: red;">
            @if($errors->any())
            <x-jet-validation-errors style="color: black; font-weight:bold"/><br>
            
            @empty($role)
            <a href="{{route('getStarted')}}"><button class="btn transparent" id="sign-up-btn">
              Select role
            </button></a>
            @endempty
            @empty(!$role)
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
            @endempty
            @else
            
            
            
            @empty($role)
             <p style="font-size: 17px;">If you want to <b style="color: black;">sign up</b> , you must select the <b style="color: black;">role</b> by clicking the <b style="color:black">SELECT ROLE</b> button.</p>
              <a href="{{route('getStarted')}}"><button class="btn transparent" id="sign-up-btn">
              Select role
            </button></a>
            @endempty

            @empty(!$role)
            <p>Click the below 'SIGN UP' button , If not yet account</p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
            @endempty
            @endif
            </p>
          </div>
          <img src="{{asset('register-asset')}}/img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
        
            <p>
              Click the below 'SIGN IN' button , if already have a account.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="{{asset('register-asset')}}/img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{asset('register-asset')}}/app.js"></script>
  </body>
</html>
