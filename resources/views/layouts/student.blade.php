<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{Auth::user()->Firstname.' '.'Dashboard'}}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
{{--        <x-jet-banner />--}}

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
                <div class="navbar">
                    <a href="{{url('/')}}">Home</a>

                    <div class="dropdown">
                        <button class="dropbtn">Apply
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="{{url('/studentcourse')}}">View Courses</a>
                            <a href="{{url('/applicationstatus')}}">Check Application Status</a>
                        </div>
                    </div>

                            <a href="{{url('')}}">Payment</a>

            <!-- Page Content -->
{{--            <main>--}}
{{--                {{ $slot }}--}}
{{--            </main>--}}
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
