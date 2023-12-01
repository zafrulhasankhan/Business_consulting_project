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
        <img src="{{asset('template_login')}}/images/img.svg" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">Login</p>
            <div class="separator"></div>
            
                 @if (session('status'))
                   <div class="welcome-message" style="color: red;">
                      {{ session('status') }}
                   </div>
                 @endif
                 <div style="color: red;">
                 <p style="color: red;"><x-jet-validation-errors style="color: red;"/><br></p>
                 </div>


            <form class="login-form" method="POST" action="{{ route('login') }}">
              @csrf
                
                <div class="form-control">
                    <input type="email" placeholder="Email"  name="email" value="{{old('email')}}" required>
                    <i class="fas fa-envelope"></i>
                </div>
                
                 
                 <div class="form-control">
                    <input type="password" placeholder="Password" type="password" name="password"  required autocomplete="new-password">
                    <i class="fas fa-lock"></i>
                </div>
                
             <button class="submit" type="submit">Login</button>
            
            </form>
            <a href="{{route('home')}}" ><button class="btn btn-danger" style="font-size: 12px;">Back to home</button></a>
        </div>
    </section>
    
</body>
</html>