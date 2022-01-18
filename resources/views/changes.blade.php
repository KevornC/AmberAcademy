<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amber Heart Academy</title>
    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body class="bg-white font-family-karla">

{{--<div class="relative flex justify-center min-h-screen py-4 bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">--}}

<!-- Top Bar Nav -->
<nav class="w-full py-4 bg-blue-800 shadow">

    <!--    <div class="container flex flex-wrap items-center justify-between w-full mx-auto">-->
    @if (Route::has('login'))
        <div class="flex items-center justify-between text-sm font-bold text-white no-underline uppercase">
            <div >

                <a href="{{ url('/') }}" class="px-4 hover:text-gray-200 hover:underline">Home</a>
                @auth
                    @if(Auth::user()->role=='0')
                        <a href="{{ url('/dashboard') }}" class="px-4 hover:text-gray-200 hover:underline">Profile</a>
                   @endif

                 @if(Auth::user()->role=='1')
                        <a href="{{ url('/dashboard') }}" class="px-4 hover:text-gray-200 hover:underline">Profile</a>
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="px-4 hover:text-gray-200 hover:underline">Sign in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-4 hover:text-gray-200 hover:underline">Student Registration</a>
                        @endif
                    @endauth
            </div>
            <div class="flex items-center pr-6 text-lg text-white no-underline">
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

<!-- Text Header -->
<header class="container w-full mx-auto">
    <div class="flex flex-col items-center py-12">
        <p class="text-5xl font-bold text-gray-800 uppercase" href="#">
            Amber Heart Academy
        </p>
        <p class="text-lg text-gray-600">
            "Where Coding is Life"
        </p>
    </div>
</header>

<!-- Topic Nav -->
<nav class="w-full py-4 bg-gray-100 border-t border-b" x-data="{ open: false }">
    <div class="block sm:hidden">
        <a
            href="#"
            class="flex items-center justify-center block text-base font-bold text-center uppercase md:hidden"
            @click="open = !open"
        >
            Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="ml-2 fas"></i>
        </a>
    </div>
    <div :class="open ? 'block': 'hidden'" class="flex-grow w-full sm:flex sm:items-center sm:w-auto">
        <div class="container flex flex-col items-center justify-center w-full px-6 py-2 mx-auto mt-0 text-sm font-bold uppercase sm:flex-row">
            <a href="{{url('/courses')}}" class="px-4 py-2 mx-2 rounded hover:bg-gray-400">Courses Offered</a>
            @if (Route::has('login'))
                    @auth
                        @if(Auth::user()->role=='0')
                        <a href="{{ url('/studentcourse') }}" class="px-4 py-2 mx-2 rounded hover:bg-gray-400">Apply</a>
                    @elseif(Auth::user()->role=='0')
                        <a href="{{url('/login')}}" id="apply" onclick="openPage()" class="px-4 py-2 mx-2 rounded hover:bg-gray-400">Apply</a>
@endif
                    @endauth
            @endif
            <a href="{{url('/media')}}" class="px-4 py-2 mx-2 rounded hover:bg-gray-400">Media</a>
            <a href="{{url('/contactus')}}" class="px-4 py-2 mx-2 rounded hover:bg-gray-400">Contact Us</a>
        </div>
    </div>
</nav>
<script>
    function openPage(){
        x=document.getElementById("apply").value;
        alert('Have To Be Logged in or Registered to apply');
    }
</script>


<div class="container flex flex-wrap py-6 mx-auto">

    <!-- Posts Section -->
    <section class="flex flex-col items-center w-full px-3 md:w-2/3">

        <article class="flex flex-col my-4 shadow">
            <!-- Article Image -->
            <a href="{{url('/media')}}" class="hover:opacity-75">
                <img class="hover:opacity-75" src="img/image2.png">
            </a>
            <div class="flex flex-col justify-start p-6 bg-white">
                <a href="{{url('/media')}}" class="pb-4 text-sm font-bold text-blue-700 uppercase">Media</a>
                <a href="{{url('/media')}}" class="pb-4 text-3xl font-bold hover:text-gray-700">World Class Training</a>
                <p href="#" class="pb-3 text-sm">
                    By <a href="#" class="font-semibold hover:text-gray-800">Shaneika Callum</a>, Published on August 15th, 2021
                </p>
                <a href="{{url('/media')}}" class="pb-6">We Launched our first co-hort in January 2021 and they are all doing well. Now looking forward to making some hard earned cash. This could be you too. <b>APPLY TODAY!</b></a>
                <a href="{{url('/media')}}" class="text-gray-800 uppercase hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
            </div>
        </article>




    </section>

    <!-- Sidebar Section -->
    <aside class="flex flex-col items-center w-full px-3 md:w-1/3">

        <div class="flex flex-col w-full p-6 my-4 bg-white shadow">
            <p class="pb-5 text-xl font-semibold">About Us</p>
            <p class="pb-2">Amber HEART/NSTA Trust Coding Academy is a groundbreaking first step towards achieving our vision of positioning Jamaica as a technology and innovation hub.</p>
            <a href="{{url('/aboutus')}}" class="flex items-center justify-center w-full px-2 py-3 mt-4 text-sm font-bold text-white uppercase bg-blue-800 rounded hover:bg-blue-700">
                Get to know us
            </a>
        </div>

        <div class="flex flex-col w-full p-6 my-4 bg-white shadow">
            <p class="pb-5 text-xl font-semibold">Instagram</p>
            <div class="grid grid-cols-3 gap-3">
{{--                <img class="hover:opacity-75" src="img/image5.jpg">--}}
                <img class="hover:opacity-75" src="img/image3.jpg">
                <img class="hover:opacity-75" src="img/image1.jpg">
                <img class="hover:opacity-75" src="img/image3.jpg">
                {{--                 <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">--}}
            </div>
            <a href="https://www.instagram.com/myamber.group/?igshid=1fg4zlgg6umbc&hl=en" class="flex items-center justify-center w-full px-2 py-3 mt-6 text-sm font-bold text-white uppercase bg-blue-800 rounded hover:bg-blue-700">
                <i class="mr-2 fab fa-instagram"></i> Follow Amber Heart Academy
            </a>
        </div>

    </aside>

</div>
<br>
<footer class="w-full pb-12 bg-white border-t ">

    <div class="container flex flex-col items-center w-full mx-auto">
        <div class="flex flex-col py-6 text-center md:flex-row md:text-left md:justify-between">
            <a href="/aboutus" class="px-3 uppercase">About Us</a>
            <a href="#" class="px-3 uppercase">Contact Us</a>
        </div>
        <div class="pb-6 uppercase"> Amberheartacademy.com</div>
    </div>
</footer>

{{--<script>--}}
{{--    function getCarouselData() {--}}
{{--        return {--}}
{{--            currentIndex: 0,--}}
{{--            images: [--}}
{{--                'https://source.unsplash.com/collection/1346951/800x800?sig=1',--}}
{{--                'https://source.unsplash.com/collection/1346951/800x800?sig=2',--}}
{{--                'https://source.unsplash.com/collection/1346951/800x800?sig=3',--}}
{{--                'https://source.unsplash.com/collection/1346951/800x800?sig=4',--}}
{{--                'https://source.unsplash.com/collection/1346951/800x800?sig=5',--}}
{{--                'https://source.unsplash.com/collection/1346951/800x800?sig=6',--}}
{{--                'https://source.unsplash.com/collection/1346951/800x800?sig=7',--}}
{{--                'https://source.unsplash.com/collection/1346951/800x800?sig=8',--}}
{{--                'https://source.unsplash.com/collection/1346951/800x800?sig=9',--}}
{{--            ],--}}
{{--            increment() {--}}
{{--                this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;--}}
{{--            },--}}
{{--            decrement() {--}}
{{--                this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;--}}
{{--            },--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}

</body>
</html>
