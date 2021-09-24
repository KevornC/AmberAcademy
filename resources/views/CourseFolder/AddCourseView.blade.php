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
/* center buttn */
    .centertable{
            display:flex;
            justify-content: center;
            align-items: center;
            /* height: 80vh; */
        }

    .font-family-karla {
        font-family: karla;
    } 
    
    textarea{
            resize: none;
        }

        section{
            width: 100%;
            max-width:400px;
           margin: auto;
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
    <h1 class="flex flex-col items-center text-blue-800 text-2xl py-8">Add Course(s)</h1>
</div>
<section>
    <x-jet-validation-errors class="mb-4" />
<form method="POST" action="{{ url('addcourse') }}">
    @csrf
    <br><br>
    {{-- <b><h1>Add Course</h1></b><br> --}}
    <div>
        <x-jet-label for="courseid" value="{{ __('Course Id') }}" />
        <x-jet-input id="courseid" class="block mt-1 w-full" type="text" name="courseid" :value="old('courseid')" required autofocus autocomplete="courseid" /><br>
    </div>

    <div>
        <x-jet-label for="coursename" value="{{ __('Course Name') }}" />
        <x-jet-input id="coursename" class="block mt-1 w-full" type="text" name="coursename" :value="old('coursename')" required autofocus autocomplete="coursename" /><br>
    </div>

    <div>
        <x-jet-label for="coursetime" value="{{ __('Course Duration') }}" />
        <x-jet-input id="coursetime" class="block mt-1 w-full" type="text" name="coursetime" :value="old('coursetime')" required autofocus autocomplete="coursetime" /><br>
    </div>

    <div>
        <x-jet-label for="coursecost" value="{{ __('Course Cost') }}" />
        <x-jet-input id="coursecost" class="block mt-1 w-full" type="text" name="coursecost" :value="old('coursecost')" required autofocus autocomplete="coursecost" /><br>
    </div>

    {{--   START DATE--}}
    <div class="mt-4">
        <x-jet-label value="{{ __('Start Date') }}" />
        <select name="start_month" class="inline-block mt-1 w-half">
            <option> </option>
            <option :value="old('January')" >January</option>
            <option :value="old('February')">February</option>
            <option :value="old('March')" >March</option>
            <option :value="old('April')" >April</option>
            <option :value="old('May')" >May</option>
            <option :value="old('June')" >June</option>
            <option :value="old('July')" >July</option>
            <option :value="old('August')" >August</option>
            <option :value="old('September')" >September</option>
            <option :value="old('October')" >October</option>
            <option :value="old('November')" >November</option>
            <option :value="old('December')" >December</option>
        </select>

        <select name="start_day" class="inline-block mt-1 w-half">
            <option> </option>
            <option :value="old('1')" >1</option>
            <option :value="old('2')" >2</option>
            <option :value="old('3')" >3</option>
            <option :value="old('4')" >4</option>
            <option :value="old('5')" >5</option>
            <option :value="old('6')" >6</option>
            <option :value="old('7')" >7</option>
            <option :value="old('8')" >8</option>
            <option :value="old('9')" >9</option>
            <option :value="old('1O')" >10</option>
            <option :value="old('11')" >11</option>
            <option :value="old('12')" >12</option>
            <option :value="old('13')" >13</option>
            <option :value="old('14')" >14</option>
            <option :value="old('15')" >15</option>
            <option :value="old('16')" >16</option>
            <option :value="old('17')" >17</option>
            <option :value="old('18')" >18</option>
            <option :value="old('19')" >19</option>
            <option :value="old('20')" >20</option>
            <option :value="old('21')" >21</option>
            <option :value="old('22')" >22</option>
            <option :value="old('23')" >23</option>
            <option :value="old('24')" >24</option>
            <option :value="old('25')" >25</option>
            <option :value="old('26')" >26</option>
            <option :value="old('27')" >27</option>
            <option :value="old('28')" >28</option>
            <option :value="old('29')" >29</option>
            <option :value="old('30')" >30</option>
            <option :value="old('31')" >31</option>
        </select>

        <select name="start_year" class="inline-block mt-1 w-half">
            <option> </option>
            <option :value="old('2003')" >2021</option>
            <option :value="old('2002')" >2022</option>
            <option :value="old('2001')" >2023</option>
            <option :value="old('2000')" >2024</option>
            <option :value="old('2000')" >2025</option>
            <option :value="old('2000')" >2026</option>
            <option :value="old('2000')" >2027</option>
            <option :value="old('2000')" >2028</option>
            <option :value="old('2000')" >2029</option>
            <option :value="old('2000')" >2030</option>
        </select>

    </div>

{{--    END DATE--}}

    <div class="mt-4">
        <x-jet-label value="{{ __('End Date') }}" />
        <select name="end_month" class="inline-block mt-1 w-half">
            <option> </option>
            <option :value="old('January')" >January</option>
            <option :value="old('February')">February</option>
            <option :value="old('March')" >March</option>
            <option :value="old('April')" >April</option>
            <option :value="old('May')" >May</option>
            <option :value="old('June')" >June</option>
            <option :value="old('July')" >July</option>
            <option :value="old('August')" >August</option>
            <option :value="old('September')" >September</option>
            <option :value="old('October')" >October</option>
            <option :value="old('November')" >November</option>
            <option :value="old('December')" >December</option>
        </select>

        <select name="end_day" class="inline-block mt-1 w-half">
            <option> </option>
            <option :value="old('1')" >1</option>
            <option :value="old('2')" >2</option>
            <option :value="old('3')" >3</option>
            <option :value="old('4')" >4</option>
            <option :value="old('5')" >5</option>
            <option :value="old('6')" >6</option>
            <option :value="old('7')" >7</option>
            <option :value="old('8')" >8</option>
            <option :value="old('9')" >9</option>
            <option :value="old('1O')" >10</option>
            <option :value="old('11')" >11</option>
            <option :value="old('12')" >12</option>
            <option :value="old('13')" >13</option>
            <option :value="old('14')" >14</option>
            <option :value="old('15')" >15</option>
            <option :value="old('16')" >16</option>
            <option :value="old('17')" >17</option>
            <option :value="old('18')" >18</option>
            <option :value="old('19')" >19</option>
            <option :value="old('20')" >20</option>
            <option :value="old('21')" >21</option>
            <option :value="old('22')" >22</option>
            <option :value="old('23')" >23</option>
            <option :value="old('24')" >24</option>
            <option :value="old('25')" >25</option>
            <option :value="old('26')" >26</option>
            <option :value="old('27')" >27</option>
            <option :value="old('28')" >28</option>
            <option :value="old('29')" >29</option>
            <option :value="old('30')" >30</option>
            <option :value="old('31')" >31</option>
        </select>

        <select name="end_year" class="inline-block mt-1 w-half">
            <option> </option>
            <option :value="old('2003')" >2021</option>
            <option :value="old('2002')" >2022</option>
            <option :value="old('2001')" >2023</option>
            <option :value="old('2000')" >2024</option>
            <option :value="old('2000')" >2025</option>
            <option :value="old('2000')" >2026</option>
            <option :value="old('2000')" >2027</option>
            <option :value="old('2000')" >2028</option>
            <option :value="old('2000')" >2029</option>
            <option :value="old('2000')" >2030</option>
        </select>

    </div>

    <div>
        <br>
       {{ __('Course Information') }}
       <textarea type="textarea"  rows="10" cols="50" class="block mt-1 w-full" name="courseinfo" :value="old('courseinfo')" required autofocus placeholder="Enter course information here"></textarea>
        <br>
    </div>

    <br>

    <div class="flex items-center mt-4 centertable">

        <x-jet-button class="ml-4">
            {{ __('Add Course') }}
        </x-jet-button>
        <x-jet-button type="reset" class="ml-4">
            {{ __('Clear Fields') }}
        </x-jet-button>
    </div>


    <br>

</form>
</section>
</body>
</html>
{{--FORM--}}

