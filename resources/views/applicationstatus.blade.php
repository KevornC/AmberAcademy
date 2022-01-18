<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application Status</title>

   <!-- Tailwind -->
   <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.7.0/dist/tailwind.min.css">
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
            max-width: 800px;
            width: 100%;
            margin:auto;
            position: relative;
            margin-bottom: 3em;
        }
        table * {
            position: relative;
        }
        table td, table th {
            padding-left: 8px;
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

    
</head>

<body class="bg-white font-family-karla">
<x-app-layout>
    
        
<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <p class="font-bold text-gray-800 uppercase text-5xl" href="#">
            Amber Heart Academy
        </p>
        <p class="text-lg text-gray-600">
            "Where Coding is Life"
        </p>
      </div>
      </header>

       <div class="w-full bg-blue-800  mx-auto">
       <h1 class="flex flex-col items-center text-white text-2xl py-8">Application Status</h1><br>
       </div>

       <x-guest-layout>
      


        <table>
            <th>Course Name</th>
            <th>Course Cost</th>
            <th>Application Status</th>
    
            @foreach(Session()->get('app_stat') as $course)
                <tr>
                    <td>{{$course->student_course}}</td>
                    <td>{{$course->cost}}</td>

                    @if ($course->response == '1')                         
                    <td>Approved</td>
                    @elseif ($course->response == '0')
                    <td>Application Denied</td>
                    @else
                    <td>Under Review</td>
                    @endif


              </tr>
            @endforeach
        </table>

    </div>

            



            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            
                        </div>
                    </x-jet-label>
                </div>
            @endif

            
            <br> <x-jet-validation-errors class="mb-4" />

        </form>


</x-guest-layout>
<br>
<footer class="w-full border-t bg-white pb-12 ">

    <div class="w-full container mx-auto flex flex-col items-center">
        <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
            <a href="/aboutus" class="uppercase px-3">About Us</a>
            <a href="#" class="uppercase px-3">Contact Us</a>
        </div>
        <div class="uppercase pb-6"> Amberheartacademy.com</div>
    </div>
</footer>


</body>

</html>

</x-app-layout>

