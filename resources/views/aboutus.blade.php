<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        .centertable{
            display:flex;
            justify-content: center;
            align-items: center;
            /* height: 80vh; */
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body class="bg-white font-family-karla">

<!-- Top Bar Nav -->
<nav class="w-full py-4 bg-blue-800 shadow">

    @if (Route::has('login'))
        <div class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
            <div >

                <a href="{{ url('/') }}" class="hover:text-gray-200 hover:underline px-4">Home</a>
                @auth
                    @if(Auth::user()->role=='0')
                        <a href="{{ url('/dashboard') }}" class="hover:text-gray-200 hover:underline px-4">Profile</a>
                   @endif

                 @if(Auth::user()->role=='1')
                        <a href="{{ url('/dashboard') }}" class="hover:text-gray-200 hover:underline px-4">Profile</a>
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

<!-- Text Header -->
<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <p class="font-bold text-gray-800 uppercase text-4xl" href="#">
            About us
        </p>
    </div>
</header>

<!-- Topic Nav -->
<nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
    <div class="block sm:hidden">
        <a
            href="#"
            class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
            @click="open = !open"
        >
            Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
        </a>
    </div>
    <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
        <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
            <a href="{{url('courses')}}" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Courses Offered</a>
            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/studentcourse') }}" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Apply</a>
                    @else
                        <a href="{{url('/login')}}" id="apply" onclick="openPage()" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Apply</a>

                    @endauth
            @endif
            <a href="{{url('/media')}}" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Media</a>
          <a href="{{url('/contactus')}}" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Contact Us</a>
        </div>
    </div>
</nav>

<script>
    function openPage(){
        x=document.getElementById("apply").value;
        alert('Have To Be Logged in or Registered to apply');
    }
</script>


<div class="centertable">

    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">
       
        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img class="hover:opacity-75"  width="900px" height="200px" src="img/about.jpg">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <p class="pb-6">THE HEART Trust/NTA was established in 1982 by former Prime Minister, the Most Honourable Edward Seaga. In a bid to satisfy the demand for solutions to the persistent problem of underdevelopment in the country, Seaga, during the Budget Debate on April 22, 1982, announced that one of his priorities was that of creating a skills-training and employment programme for Jamaicans. </p>

                   <p> The HEART programme was intended to provide vocational training across the island, which, in the long run, would have equipped Jamaican workers with the necessary knowledge, skills and attitudes needed for higher levels of productivity. The blueprint of the Trust estimated that 4,000 young people who had passes in GCE and JSCE would have been afforded an opportunity to participate in skills-based programmes.</p>

                   <p> The HEART Trust/NTA has reshaped and restructured their mandate in several ways and now boasts 28 HEART institutions, over 80 Community Training Intervention (CTI)  programmes, numerous nationwide partnerships and special projects in the sectors of hospitality, wellness and beauty services, construction services, automotive services, creative arts, agriculture and ecological sciences, information and communication technology. 

                    Within the last few years, the Trust has forged additional partnerships with local and international partners, introduced new programmes, signed memoranda of understanding with various stakeholders, and launched HEART Workforce Colleges and TVET institutes. </p>
              </div>
        </article>
    </section>
</div>

<br>
<footer class="w-full border-t bg-white pb-12 ">

    <div class="w-full container mx-auto flex flex-col items-center">
        <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
            <a href="#" class="uppercase px-3">About Us</a>
            {{-- <a href="#" class="uppercase px-3">Privacy Policy</a> --}}
            {{-- <a href="#" class="uppercase px-3">Terms & Conditions</a> --}}
            <a href="#" class="uppercase px-3">Contact Us</a>
        </div>
        <div class="uppercase pb-6"> Amberheartacademy.com</div>
    </div>
</footer>
</body>
</html>
