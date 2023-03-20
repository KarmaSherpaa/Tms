
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('cssFile/Admin.css')}}">
  <title>Admin Login Page</title>
</head>
<body>
    <!-- <a href="#"><img src="C:\Users\Asus\Desktop\Frontend\TAX MANAGEMENT SYSTEM\Logo.png" alt="logo"></a> -->
    <header>
        
      <div class="logo">
        <a href="#"><img src="finallogo.png" alt="logo"></a>
        
      </div>
  
      <div class="button">
        <a href="#" class="btn btn-1">Sign up</a>
        <a href="#" class="btn btn-2">Sign in</a>
  
      </div> 
    </header>
   
  <div class="container">
    <div class="image">
      <a href="#"><img src="signupimage.jpg" alt="image"></a>
    </div>
  
  <div class="signup-box">

    <h2>SIGN IN</h2>

    <hr class="h">
    <form method="POST" action="{{ route('login') }}">
      <label>Username</label>
      <x-text-input id="email"  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />

      <label>Password</label>
      <x-text-input id="password" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <div class="remember">
                    <label for="remember_me">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span>{{ __('Remember me') }}</span>
                    </label>
                    <div class="forgotPassword">
                        @if (Route::has('password.request'))
                            <a  class="btn-3" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </div>
               <x-primary-button class="btn">
                    {{ __('Log in') }}
                </x-primary-button>        
    </form>
    
</div>
</div>
</body>
</html>
