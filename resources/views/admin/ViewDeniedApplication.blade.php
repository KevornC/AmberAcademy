<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Approved Application</title>

    <!-- Tailwind -->
<link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <x-Admin-nav-bar/>
<x-admin-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrator Dashboard'.' '.'-'.' '.Auth::user()->Firstname.' '.Auth::user()->lastname) }}
        </h2>
    </x-slot> --}}
</x-admin-layout>

<div class="w-full bg-blue-300 mx-auto">
    <h1 class="flex flex-col items-center text-blue-800 text-2xl py-8">Denied Application(s)</h1>
</div>

<section>
    <div class="centertable">
        <table class="styled-table">
        <thead>
<tr>
        <th>Student ID</th>
        <th>Photograpgh</th>
        <th>Name</th>
        <th>Course</th>
        <th>Date Applied</th>
</tr>
<thead>
@foreach($data as $info)
<tbody>
<tr>
        <td>{{$info->id}}</td>
        <td>{{$info->image}}</td>
        <td>{{$info->student_name}}</td>
        <td>{{$info->student_course}}</td>
        <td>{{$info->created_at}}</td>
</tr>
</tbody>
@endforeach
    </table>
    </div>
</section>
</html>