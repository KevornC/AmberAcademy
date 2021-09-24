<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses</title>

    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
    
        .font-family-karla {
            font-family: karla;
        }

        section{
            width: 100%;
            max-width:400px;
            margin: auto;
        }

        /*    Table style*/
        .centertable{
            display:flex;
            justify-content: center;
            align-items: center;
            /* height: 80vh; */
        }
      
        .styled-table {
    /* border-collapse: collapse; */
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    padding-left: 5px;
    padding-right: 5px;
}

.styled-table thead tr {
    background-color: #0072fd;
    color: #ffffff;
    text-align: center;

}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}
.styled-table tbody td {
    padding-left:1.5em;
    padding-right:1.5em;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}
table th, table td{
    padding: 10px;
}
.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #6c6b72d7;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
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
.red{
    background-color: #f44336;
}
.green{
    background-color: #56f436;
}
.blue{
    background-color: #3672f4;
}
.red:hover, .red:active {
  background-color: red;
}
.green:hover, .green:active {
  background-color: rgb(10, 180, 4);
}
.blue:hover, .blue:active {
  background-color: rgb(0, 17, 255);
}


    </style>
</head>
<body>
    <x-Admin-nav-bar/>
<x-admin-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrator Dashboard'.' '.'-'.' '.Auth::user()->Firstname.' '.Auth::user()->lastname) }}
        </h2>
    </x-slot> --}}
</x-admin-layout>

<div class="w-full bg-blue-300 mx-auto">
    <h1 class="flex flex-col items-center text-blue-800 text-2xl py-8">View Course</h1>
</div>
<section>
    <x-jet-validation-errors class="mb-4" />
    {{--<form method="POST" action="{{ url('addcourse') }}">--}}
    {{--    @csrf--}}
    <br><br>
    {{-- <b><h1>View Course</h1></b><br> --}}
<div class="centertable">
    <table class="styled-table">
        <th>Course Id</th>
        <th>Course Name</th>
        <th>Course Time</th>
        <th>Course Cost</th>
        <th>Course Start Date</th>
        <th>Course End Date</th>
        <th>Course Info</th>
        <th>Actions</th>

        @foreach($courses as $course)
            <tr>
                <td>{{$course['course_id']}}</td>
                <td>{{$course['course_name']}}</td>
                <td>{{$course['course_time']}}</td>
                <td>{{$course['course_cost']}}</td>
                <td>{{$course['start_date']}}</td>
                <td>{{$course['end_date']}}</td>
                <td>{{$course['course_info']}}</td>
                <td><a class="a blue" href="{{url('update/'.$course['course_id'])}}">Update</a></td>
                <td><a class="a red" href="{{url('delete/'.$course['course_id'])}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
</div>
    <div class="flex items-center mt-4  centertable">
        <x-jet-button class="ml-4">
            <a href="{{url('addcourse')}}">{{ __('Add Course') }}</a>
        </x-jet-button>
    </div>
    <br>

    {{--</form>--}}
</section>
</body>
</html>
{{--FORM--}}

