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
    {{-- <b><h1>View Course</h1></b><br> --}}

    <table>
        <th>Course Id</th>
        <th>Course Name</th>
        <th>Course Time</th>
        <th>Course Start Date</th>
        <th>Course End Date</th>
        <th>Course Info</th>
        <th>Course Cost</th>
        <th>Apply</th>

        @foreach($courses as $course)
            <tr>
                <td>{{$course['course_id']}}</td>
                <td>{{$course['course_name']}}</td>
                <td>{{$course['course_time']}}</td>
                <td>{{$course['start_date']}}</td>
                <td>{{$course['end_date']}}</td>
                <td>{{$course['course_info']}}</td>
                <td>{{$course['course_cost']}}</td>
                <td><a class="a btn" href="{{url('apply/'.$course['course_id'])}}">Apply</a></td>
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

