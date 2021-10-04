<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



    <style>

        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }



        /* button css */
        .a:link, .a:visited {
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius:20px;
        }
        .btn{
            background-color: #1dca51;
        }
    </style>




</head>
<body class="bg-white font-family-karla">
<x-app-layout>
    <x-slot name="header">
        <!-- Text Header -->
        <header class="w-full container mx-auto">
            <div class="flex flex-col items-center py-2">
                <p class="font-bold text-gray-800 uppercase text-5xl" href="{{url('/')}}"> Available Courses  </p>
                <p class="text-lg text-gray-600">  "Apply for the course of your choice"  </p>
            </div>
        </header>
    </x-slot>

    <!-- Topic Nav -->

    <section>
        <x-jet-validation-errors class="mb-4" />
        {{--<form method="POST" action="{{ url('addcourse') }}">--}}
        {{--    @csrf--}}
        @if ($msg = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $msg }}</strong>
            </div>
        @endif
        @if ($msg = Session::get('failure'))
            <div class="alert alert-danger">
                <strong>{{ $msg }}</strong>
            </div>
        @endif
        <br><br>

        @foreach($courses as $course)

            <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex items-center justify-between leading-normal">
                <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                        <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                        </svg>
                        Certified - Course Id: {{$course['course_id']}}
                    </p>
                    <div class="text-gray-900 font-bold text-xl mb-2 container-fluid"> {{$course['course_name']}} </div>
                   <p class="text-gray-700 text-base"> <b> Details </b></p>
                    <p class="text-gray-700 text-base"> {{$course['course_info']}} </p>
                </div>
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-full mr-4" src="\images\aber.png" alt="logo">
                    <div class="text-sm">
                        <p class="text-gray-900 leading-none">Duration: {{$course['course_time']}}</p>
                        <p class="text-gray-900 leading-none"> Cost:  {{$course['course_cost']}}</p>
                        <p class="text-gray-600">Start Date: {{$course['start_date']}} </p>
                        <p class="text-gray-600">End Date: {{$course['end_date']}}</p>
                    </div>
                </div>
                <a class="a btn" href="{{url('apply/'.$course['course_id'])}}">Apply</a>
            </div>
<br>
            @endforeach


        {{--</form>--}}
    </section>

    <br>
    <footer class="w-full border-t bg-white pb-12 ">

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

</body>
</html>

</x-app-layout>

