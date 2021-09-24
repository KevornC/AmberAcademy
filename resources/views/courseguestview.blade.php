<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>

        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: red;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        section{
            width: 100%;
            /* max-width:400px; */
            /* margin: auto; */
        }

        /*    Table style*/

        table {
            border-spacing: 1;
            border-collapse: collapse;
            background: white;
            border-radius: 6px;
            overflow: hidden;
            width: 1200px;
            height: 500px;
            /* width: 100%; */
            margin:auto;
            position: relative;
            margin-bottom: 3em;
        }
        table * {
            position: relative;
        }
        table th{
            width:50px;
            background-color: grey;
        }
        table td, table th {
            padding-left: 10px;

        }
        table thead tr {
            height: 60px;
            background: #ffed86;
            font-size: 16px;
        }
        table tbody tr {
            height: 48px;
            border-bottom: 1px solid #e3f1d5;
        }
        table tbody tr:last-child {
            border: 0;
        }
        table td, table th {
            text-align: left;
        }
        table td.l, table th.l {
            text-align: right;
        }
        table td.c, table th.c {
            text-align: center;
        }
        table td.r, table th.r {
            text-align: center;
        }
        @media screen and (max-width: 35.5em) {
            table {
                display: block;
            }
            table > *, table tr, table td, table th {
                display: block;
            }
            table thead {
                display: none;
            }
            table tbody tr {
                height: auto;
                padding: 8px 0;
            }
            table tbody tr td {
                padding-left: 45%;
                margin-bottom: 20px;
            }
            table tbody tr td:last-child {
                margin-bottom: 0;
            }
            table tbody tr td:before {
                position: absolute;
                font-weight: 700;
                width: 40%;
                left: 10px;
                top: 0;
            }
            table tbody tr td:nth-child(1):before {
                content: "Code";
            }
            table tbody tr td:nth-child(2):before {
                content: "Stock";
            }
            table tbody tr td:nth-child(3):before {
                content: "Cap";
            }
            table tbody tr td:nth-child(4):before {
                content: "Inch";
            }
            table tbody tr td:nth-child(5):before {
                content: "Box Type";
            }
        }
    </style>


        <!-- AlpineJS -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <!-- Font Awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>



</head>
<body class="bg-white font-family-karla">

{{--<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">--}}

<!-- Top Bar Nav -->
<nav class="w-full py-4 bg-blue-800 shadow">

    <!--    <div class="w-full container mx-auto flex flex-wrap items-center justify-between">-->
    @if (Route::has('login'))
        <div class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
            <div >

                <a href="{{ url('/') }}" class="hover:text-gray-200 hover:underline px-4">Home</a>
                @auth
                    @if(Auth::user()->role=='0')
                        <a href="{{ url('/dashboard') }}" class="hover:text-gray-200 hover:underline px-4">Dashboard</a>
                    @endif

                    @if(Auth::user()->role=='1')
                        <a href="{{ url('/dashboard') }}" class="hover:text-gray-200 hover:underline px-4">Dashboard</a>
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
            Available Courses
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
            <a href="{{url('/courses')}}" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Courses Offered</a>
            @if (Route::has('login'))
                @auth
                    @if(Auth::user()->role=='0')
                        <a href="{{ url('/studentcourse') }}" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Apply</a>
                        {{--                        @endif--}}
                    @elseif(Auth::user()->role=='0')
                        <a href="{{url('/login')}}" id="apply" onclick="openPage()" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Apply</a>
                    @endif
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

<section>
    <x-jet-validation-errors class="mb-4" />

    <br><br>


    <table>
        <tr>
        <th>Course Id</th>
        <th>Course Name</th>
        <th>Course Time</th>
        <th>Course Cost</th>
        <th>Course Start Date</th>
        <th>Course End Date</th>
        <th>Course Info</th>
        </tr>
        @foreach($courses as $course)
            <tr>
                <td><b>{{$course['course_id']}}</b></td>
                <td>{{$course['course_name']}}</td>
                <td>{{$course['course_time']}}</td>
                <td>{{$course['course_cost']}}</td>
                <td>{{$course['start_date']}}</td>
                <td>{{$course['end_date']}}</td>
                <td>{{$course['course_info']}}</td>
            </tr>
        @endforeach
    </table>


    {{--</form>--}}
</section>

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
{{--FORM--}}

