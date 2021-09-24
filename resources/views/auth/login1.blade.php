<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
        /*.adj{*/
        /*    margin-top: 1em;*/

        /*}*/
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

</head>
<body class="bg-white font-family-karla">

<nav class="w-full py-4 bg-blue-800 shadow">

    @if (Route::has('login'))
        <div class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
            <div >
                @auth
                    @if(Auth::user()->role=='0')
                        <a href="{{ url('/dashboard') }}" class="hover:text-gray-200 hover:underline px-4">Dashboard</a>
                    @endif

                    @if(Auth::user()->role=='1')
                        <a href="{{ url('/dash') }}" class="hover:text-gray-200 hover:underline px-4">Dashboard</a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="hover:text-gray-200 hover:underline px-4">Sign in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="hover:text-gray-200 hover:underline px-4">Student Registration</a>
                    @endif
                @endauth
            </div>
            <div class="flex items-center  text-lg no-underline text-white pr-6">
                <a class="pl-6" href="#">
                    <p> Follow us on </p>
                </a>

                <a class="pl-6" href="#">
                    <i class="fab fa-facebook"></i>
                </a>

                <a class="pl-6" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
    @endif
</nav>

<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <p class="font-bold text-gray-800 uppercase text-5xl" href="#">
            Amber Heart Academy
        </p>
        <p class="text-lg text-gray-600">
            "Where Coding is Life"
        </p>
    </div>
</header>

<div class="w-full bg-blue-800 container mx-auto">
    <h1 class="flex flex-col items-center text-white text-2xl py-8">Log Into Your Account</h1>
</div>
{{--JET STREAM LOGIN--}}
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
{{--            <x-jet-authentication-card-logo />--}}
        </x-slot>


        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>     <br> <x-jet-validation-errors class="mb-4" />

        </form>

    </x-jet-authentication-card>
</x-guest-layout>

{{--Footer Section--}}

{{--<div class="mt-100">--}}
<footer>

    <div class="w-full container mx-auto flex flex-col items-center">
        <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
            <a href="#" class="uppercase px-3">About Us</a>
            <a href="#" class="uppercase px-3">Privacy Policy</a>
            <a href="#" class="uppercase px-3">Terms & Conditions</a>
            <a href="#" class="uppercase px-3">Contact Us</a>
        </div>
        <div class="uppercase pb-6"> Amberheartacademy.com</div>
    </div>
</footer>
{{--</div>--}}
</body>
</html>
