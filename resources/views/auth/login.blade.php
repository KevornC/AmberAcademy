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

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;1,200;1,400;1,600&display=swap"
      rel="stylesheet">
  
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        @import url(https://fonts.googleapis.com/css?family=Open+Sans);

        h1{
            color: white;
            font-size: 25px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1em;
        }

        .formbg {
            width: 100%;
            margin: auto;
            max-width: 525px;
            min-height: 450px;
            position: relative;
            background: url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;
            box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19);
        }
        .loginalign {
            width:100%;
            /*max-width: 525px;*/
            height:100%;
            position:absolute;
            padding:80px 70px 50px 70px;
            background:rgba(40,57,101,.9);
        }
        /*.loginalign h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }*/

        .inputfield {
            width: 100%;
            margin-bottom: 5px;
            background: rgb(255, 255, 255);
            border: none;
            outline: none;
            border-radius: 25px;
            font-size: 13px;
            color: black;
            text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
            padding:15px 20px;

.foot{
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: black;
    color: white;
    text-align: center;
}   </style>


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
                <a href="{{ url('/') }}" class="hover:text-gray-200 hover:underline px-4">Home</a>

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

                <a class="pl-6" href="https://www.facebook.com/AmberGroupLtd/">
                    <i class="fab fa-facebook"></i>
                </a>

                <a class="pl-6" href="https://www.instagram.com/myamber.group/?igshid=1fg4zlgg6umbc&hl=en">
                    <i class="fab fa-instagram"></i>
                </a>
    @endif
</nav>

<header class="w-full  mx-auto">
    <div class="flex flex-col items-center py-12">
        <p class="font-bold text-gray-800 uppercase text-5xl" href="#">
            Amber Heart Academy
        </p>
        <p class="text-lg text-gray-600">
            "Where Coding is Life"
        </p>
    </div>
</header>
{{--<div class="w-full bg-blue-800 container mx-auto">--}}
{{--    <h1 class="flex flex-col items-center text-white text-2xl py-8">Student Registration</h1>--}}
{{--</div>--}}

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

{{--FORM --}}

<div class="formbg"><div class="loginalign">

        <form method="POST" action="{{ route('login') }}">
            @csrf
<h1>Login</h1>
            <div>
                <!-- <x-jet-label for="email" class="text-white" value="{{ __('Email') }}" /> -->
                <x-jet-input id="email" class="inputfield " placeholder="Enter Email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <!-- <x-jet-label for="password" value="{{ __('Password') }}" /> -->
                <x-jet-input id="password" class="inputfield " placeholder="Enter Password" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-white">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-white hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>


 
</body>
</html>
