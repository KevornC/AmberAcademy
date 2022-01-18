<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration</title>

    <!-- Tailwind -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.7.0/dist/tailwind.min.css">
    
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

                <a class="pl-6" href="facebook.com/AmberGroupLtd/">
                    <i class="fab fa-facebook"></i>
                </a>

                <a class="pl-6" href="https://www.instagram.com/myamber.group/?igshid=1fg4zlgg6umbc&hl=en">
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

<div class="w-full bg-blue-800 mx-auto">
    <h1 class="flex flex-col items-center text-white text-2xl py-8">Student Registration</h1>
</div>
{{----}}
{{--<div class="adj">--}}
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
{{--            <x-jet-authentication-card-logo />--}}
        </x-slot>

{{--        <x-jet-validation-errors class="mb-4" />--}}

        <form method="POST" action="{{route('register') }}"  enctype="multipart/form-data">
            @csrf
            <b><h2>Personal Information</h2></b><br>
            <p>Please ensure to complete the form below with accurate information. This will help us when we collect your admissions documents.</p><br>
           

            <div>
                
                <x-jet-label for="firstname" value="{{ __('First Name') }}" />
                <x-jet-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" /><br>
            </div>

            <div>
                <x-jet-label for="lastname" value="{{ __('Last Name') }}" />
                <x-jet-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Date of Birth') }}" />
                <select name="month" class="inline-block mt-1 w-half">
                    <option> </option>
                    <option :value="old('January')" >January</option>
                    <option :value="old('February')">February</option>
                    <option :value="old('March')" >March</option>
                    <option :value="old('April')" >April</option>
                    <option :value="old('May')" >May</option>
                    <option :value="old('June')" >June</option>
                    <option :value="old('July')" >July</option>
                    <option :value="old('August')" >August</option>
                    <option :value="old('September')" >September</option>
                    <option :value="old('October')" >October</option>
                    <option :value="old('November')" >November</option>
                    <option :value="old('December')" >December</option>
                </select>

                <select name="day" class="inline-block mt-1 w-half">
                    <option> </option>
                    <option :value="old('1')" >1</option>
                    <option :value="old('2')" >2</option>
                    <option :value="old('3')" >3</option>
                    <option :value="old('4')" >4</option>
                    <option :value="old('5')" >5</option>
                    <option :value="old('6')" >6</option>
                    <option :value="old('7')" >7</option>
                    <option :value="old('8')" >8</option>
                    <option :value="old('9')" >9</option>
                    <option :value="old('1O')" >10</option>
                    <option :value="old('11')" >11</option>
                    <option :value="old('12')" >12</option>
                    <option :value="old('13')" >13</option>
                    <option :value="old('14')" >14</option>
                    <option :value="old('15')" >15</option>
                    <option :value="old('16')" >16</option>
                    <option :value="old('17')" >17</option>
                    <option :value="old('18')" >18</option>
                    <option :value="old('19')" >19</option>
                    <option :value="old('20')" >20</option>
                    <option :value="old('21')" >21</option>
                    <option :value="old('22')" >22</option>
                    <option :value="old('23')" >23</option>
                    <option :value="old('24')" >24</option>
                    <option :value="old('25')" >25</option>
                    <option :value="old('26')" >26</option>
                    <option :value="old('27')" >27</option>
                    <option :value="old('28')" >28</option>
                    <option :value="old('29')" >29</option>
                    <option :value="old('30')" >30</option>
                    <option :value="old('31')" >31</option>
                </select>

                <select name="year" class="inline-block mt-1 w-half">
                    <option> </option>
                    <option :value="old('2003')" >2003</option>
                    <option :value="old('2002')" >2002</option>
                    <option :value="old('2001')" >2001</option>
                    <option :value="old('2000')" >2000</option>
                    <option :value="old('1999')" >1999</option>
                    <option :value="old('1998')" >1998</option>
                    <option :value="old('1997')" >1997</option>
                    <option :value="old('1996')" >1996</option>
                    <option :value="old('1995')" >1995</option>
                    <option :value="old('1994')" >1994</option>
                    <option :value="old('1993')" >1993</option>
                    <option :value="old('1992')" >1992</option>
                    <option :value="old('1991')" >1991</option>
                </select>

            </div>
            <div class="mt-4">
                <x-jet-label for="gender" value="{{ __('Gender') }}" />
                <select id="gender" name="gender" class="block mt-1 w-full">
                    <option> </option>
                    <option :value="old('male')" >Male</option>
                    <option :value="old('female')">Female</option>
                </select>
{{--                <span class="error">* {{$genderErr}}</span>--}}
            </div>

            <div class="mt-4">
                <x-jet-label for="trn" value="{{ __('Tax Registration Number') }}" />
                <x-jet-input id="trn" class="block mt-1 w-full" type="text" name="trn" :value="old('trn')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="number" value="{{ __('Phone Number') }}" />
                <x-jet-input id="number" class="block mt-1 w-full" type="text" name="number" :value="old('number')" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>





            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
            <br> <x-jet-validation-errors class="mb-4" />

        </form>
    </x-jet-authentication-card>

</x-guest-layout>

    <footer class="w-full border-t bg-white pb-12 ">

        <div class="w-full container mx-auto flex flex-col items-center">
            <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
                <a href="/aboutus" class="uppercase px-3">About Us</a>
                <a href="#" class="uppercase px-3">Contact Us</a>
            </div>
            <div class="uppercase pb-6"> Amberheartacademy.com</div>
        </div>
    </footer>

</body>
</html>
