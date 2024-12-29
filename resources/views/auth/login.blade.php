
<!DOCTYPE html>
<html  >
<head>
  
  
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<style>

::afterbody {
    font-family: 'Arial', sans-serif;
    background-color: #f8f8f8;
}

.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.logo {
    text-align: center;
    margin-bottom: 20px;
}

.logo img {
    max-width: 100%;
    height: auto;
}
</style>

<x-guest-layout>
<div class="container">
        <div class="logo">
            <div style="display: flex; justify-content: center; align-items: center;">
            <img src="assets/images/logo-nd-144x144.png" alt="Needeane Scarves" style="height: 6.5rem;">
        </div>
        </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <br>

        <!-- Remember Me -->
        {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> --}}

        {{-- <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif --}}

            <div class="flex justify-center items-center space-x-6">
                <x-primary-button class="ms-3 px-4 py-2"> <!-- Adjust px and py for button size -->
                    {{ __('Log in') }}
                </x-primary-button>
                
                <a class="text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 px-4 py-2" href="{{ route('register') }}">
                    Register
                </a>
            </div>
            
        {{-- <div class="flex items-center justify-end mt-4">
            <a class= "text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                Register
            </a>
        </div> --}}
    </div>
    </form>
</x-guest-layout>
