<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apply</title>

<!-- Tailwind -->
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.7.0/dist/tailwind.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- form css -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> --}}
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    

/*    form css*/
.container {
            max-width: 450px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
    /*form css*/

    .form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline .labels {
  margin: 5px 10px 5px 0;
}

.form-inline .inputs {
  vertical-align: middle;
  margin: 5px 10px 20px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}
    </style>

<!-- AlpineJS -->
{{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
<!-- Font Awesome -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script> --}}

</head>

<body class="bg-white font-family-karla">
<x-user-nav-bar/>
{{-- <nav class="w-full py-4 bg-black shadow"> --}}

    {{-- @if (Route::has('login'))
        <div class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
            <div >
                <a href="{{ url('/') }}" class="hover:text-gray-200 hover:underline px-4">Home</a>

                @auth
                    <a href="{{ url('/dashboard') }}" class="hover:text-gray-200 hover:underline px-4">Dashboard</a>
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
</nav> --}}

<header class="w-full mx-auto">
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
    <h1 class="flex flex-col items-center text-white text-2xl py-8">Application</h1>
</div>
{{----}}
{{--<div class="adj">--}}
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
                       {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>

        {{--        <x-jet-validation-errors class="mb-4" />--}}

        <form method="POST" action="{{ route('upload-file') }}" enctype="multipart/form-data">
            @csrf
            <p><b>Please ensure to complete the form below with accurate information. This will help us when we collect your admissions documents.</p></b><br>
            <div>
            <x-jet-label for="coursename" value="{{ __('Course Name') }}" />
            <x-jet-input id="coursename" class="block mt-1 w-full" type="text" name="coursename" readonly value="{{$course_name}}" required autofocus autocomplete="coursename" /><br>
        </div>
        <div>
                <x-jet-label for="stdcourse_cost" value="{{ __('Course Cost') }}" />
                <x-jet-input id="stdcourse_cost" class="block mt-1 w-full" type="text" name="stdcourse_cost" readonly value="{{$course_cost}}" required  />
            </div>
        <div>
            <x-jet-label for="coursetime" value="{{ __('Course Duration') }}" />
            <x-jet-input id="coursetime" class="block mt-1 w-full" type="text" name="coursetime" readonly value="{{$course_time}}" required autofocus autocomplete="coursetime" /><br>
        </div>
        <div>
            <x-jet-label for="startdate" value="{{ __('Start Date') }}" />
            <x-jet-input id="startdate" class="block mt-1 w-full" type="text" name="startdate" readonly value="{{$startmonth.' '.$startday.' '.$startyear}}" required autofocus autocomplete="startdate" /><br>
        </div>
        <div>
            <x-jet-label for="startdate" value="{{ __('End Date') }}" />
            <x-jet-input id="startdate" class="block mt-1 w-full" type="text" name="startdate" readonly value="{{$Endmonth.' '.$Endday.' '.$Endyear}}" required autofocus autocomplete="startdate" /><br>
        </div>

        <b><h2>Ensure to Upload ALL Qualifications and Personal Documents</h2></b><br><br>
  
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

         <div class="form-inline">
            <div>
                <label for="image" class="labels">{{ __('Upload Passport Size Photogragph:') }} </label>
                <x-jet-input type="file" class="inputs" name="image"/>      <br>
            </div>

            <div>
                <label class="labels" for="chooseFileid">{{ __('Upload ID:') }}</label>
                <x-jet-input type="file" name="id_doc" class="inputs" id="chooseFileid"/>  <br>
            </div> 

            <div>
                <label class="labels" for="chooseFiletrn">{{ __('Upload TRN:') }}</label>
                <x-jet-input type="file" name="trn_doc" class="inputs" id="chooseFiletrn"/> <br>
            </div>

            <div>
                <label class="labels" for="chooseFilequal">{{ __('Qualifications (CSEC, CAPE, NTVET etc:') }}</label>
                <span style= "color:red";><p><p>NB</b>: save all qualifications to a single PDF then upload here</p></span>
                <x-jet-input type="file" name="qual_doc" class="inputs" accept=".pdf" id="chooseFilequal"/> <br>
           </div>

            

                     
          
   
        </div>
       


{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />--}}
{{--                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />--}}
{{--            </div>--}}





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
                <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> -->

                <x-jet-button class="ml-4 importar">
                    {{ __('Apply') }}
                </x-jet-button>
            </div>
            <br> <x-jet-validation-errors class="mb-4" />

        </form>
    </x-jet-authentication-card>

</x-guest-layout>
{{--</div>--}}
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

{{--<x-student-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <a href="{{url('apply')}}" class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Apply') }}--}}
{{--        </a>--}}

{{--        <a class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Application Status') }}--}}
{{--        </a>--}}

{{--        <a class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('View Profile') }}--}}
{{--        </a>--}}
{{--    </x-slot>--}}


{{--</x-student-layout>--}}
