<header>
        
    <div class="logo">
      <a href="#"><img src="{{asset('Images/logo.svg')}}" alt="logo"></a>
      
    </div>

    <div class="button">
      <a href="{{ route('register') }}" class="btn btn-1">Sign up</a>
      <a href="{{ route('login') }}" class="btn btn-2">Sign in</a>

    </div> 
  </header>
  <x-guest-layout>

 
<link rel="stylesheet" href="{{asset('cssFile/ForgotPassword.css')}}">

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="forgot-box">
    <h2 style="font-size: larger" >Forgot Password</h2>
    <hr  class="h">
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
      {{ __('let us know your email address and we will email you a password reset link.') }}
    </div>
    
    <!-- Email Address -->
    <div style="margin-right:35%">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input style="width:150%"  id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div class="forgotbutton">
        <x-primary-button>
            {{ __('Forgot Password') }}
        </x-primary-button>
    </div>
</form>
</div>
</x-guest-layout>
