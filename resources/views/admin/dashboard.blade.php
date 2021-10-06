<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{'Admin'.' '.Auth::user()->Firstname}}</title>
    <!-- Tailwind -->
<link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

    .font-family-karla {
        font-family: karla;
    }
    </style>
</head>

<body class="bg-white font-family-karla">
    <x-Admin-nav-bar/>
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrator Dashboard'.' '.'-'.' '.Auth::user()->Firstname.' '.Auth::user()->lastname) }}
        </h2>
    </x-slot>
</x-admin-layout>

    <!-- Application -->
    <div class="w-full h-screen bg-gray-100 flex  ">
        <div class="flex flex-col gap-4 mt-20 mx-auto">
            <label class="text-gray-800 font-semibold tracking-wider text-lg">Application Tracker</label>
            <div class="bg-gray-800 rounded-lg w-full h-auto py-4 flex flex-row justify-between divide-x divide-solid divide-gray-400">
                <div class="relative flex-1 flex flex-col gap-2 px-4">
                    <label class="text-gray-100 text-center text-base font-semibold tracking-wider">Approved</label>
{{--                    loop to get tally--}}
                    <label class="text-white text-center text-4xl font-bold">{{$approve}}</label>
                </div>
                <div class="relative flex-1 flex flex-col gap-2 px-4">
                    <label class="text-gray-100  text-center text-base font-semibold tracking-wider">Application</label>
                    <label class="text-white text-center text-4xl font-bold">{{$app}}</label>

{{--                   if statement to test if pending should be displayed--}}
                 <?php
                 if($app>1)
                    {
                   echo '<div class="absolute bg-red-400 rounded-md font-semibold text-xs text-gray-100 p-2 right-4 bottom-0">
                        pending
                    </div>';
                    }
                    ?>

                </div>
                <div class="relative flex-1 flex flex-col gap-2 px-4">
                    <label class="text-gray-100  text-center text-base font-semibold tracking-wider">Total</label>
                    <label class="text-white text-center text-4xl font-bold">{{$all}}</label>
                </div>
            </div>
        </div>
        <!-- Course -->

            <div class="flex flex-col gap-4 mt-20  mx-auto">
            <label class="text-gray-800 font-semibold tracking-wider text-lg">Available Courses</label>
            <div class="bg-gray-800 rounded-lg w-full h-auto py-4 flex flex-row">
                <div class="relative flex-1 flex flex-col gap-2 px-4">
                    <label class="text-gray-100 text-center text-base font-semibold">Total</label>
                    <label class="text-white text-center text-4xl font-bold">{{$course}}</label>
                </div>
            </div>
            </div>



    </div>


</body>
</html>



