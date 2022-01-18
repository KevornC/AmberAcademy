<!doctype html>
<html lang="en">
<head>
<!-- Tailwind -->
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.7.0/dist/tailwind.min.css">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<style>

    @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

    .font-family-karla {
        font-family: karla;
    }

/* cards */

:root {
    --red: hsl(0, 78%, 62%);
    --cyan: hsl(180, 62%, 55%);
    --orange: hsl(34, 97%, 64%);
    --blue: hsl(212, 86%, 64%);
    --varyDarkBlue: hsl(234, 12%, 34%);
    --grayishBlue: hsl(229, 6%, 66%);
    --veryLightGray: hsl(0, 0%, 98%);
    --weight1: 200;
    --weight2: 400;
    --weight3: 600;
}

body {
    font-size: 15px;
    font-family: 'Poppins', sans-serif;
    background-color: var(--veryLightGray);
}

.attribution { 
    font-size: 11px; text-align: center; 
}
.attribution a { 
    color: hsl(228, 45%, 44%); 
}

h1:first-of-type {
    font-weight: var(--weight1);
    color: var(--varyDarkBlue);

}

h1:last-of-type {
    color: var(--varyDarkBlue);
}

@media (max-width: 400px) {
    h1 {
        font-size: 1.5rem;
    }
}

.header {
    text-align: center;
    line-height: 0.8;
    margin-bottom: 50px;
    margin-top: 100px;
}

.header p {
    margin: 0 auto;
    line-height: 2;
    color: var(--grayishBlue);
}


.box p {
    color: var(--grayishBlue);
}

.box {
    border-radius: 5px;
    box-shadow: 0px 30px 40px -20px var(--grayishBlue);
    background-color: white;
    padding: 30px;
    margin: 20px;  
}

img {
    float: right;
}

@media (max-width: 450px) {
    .box {
        height: 200px;
    }
}

@media (max-width: 950px) and (min-width: 450px) {
    .box {
        text-align: center;
        height: 180px;
    }
}

.cyan {
    border-top: 3px solid var(--cyan);
}
.red {
    border-top: 3px solid var(--red);
}
.blue {
    border-top: 3px solid var(--blue);
}
.orange {
    border-top: 3px solid var(--orange);
}

h2 {
    color: var(--varyDarkBlue);
    font-weight: var(--weight3);
}


@media (min-width: 950px) {
    .row1-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .row2-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .box-down {
        position: relative;
        top: 150px;
    }
    .box {
        width: 20%;
     
    }
    .header p {
        width: 30%;
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

<title>{{Auth::user()->Firstname.' '.'Dashboard'}}</title>
</head>
<body class="bg-white font-family-karla">

<x-app-layout>
<x-slot name="header">    
<!-- Text Header -->
<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-2">
        <p class="font-bold text-gray-800 uppercase text-5xl" href="{{url('/')}}"> Amber Heart Academy  </p>
        <p class="text-lg text-gray-600">  "Where Coding is Life"  </p>
    </div>
</header>
</x-slot>
    
    <div class="header">      </div>
      <div class="row1-container">
        <div class="box box-down cyan">
          <b><h2>Edit Profile</h2></b>
          <p>Edit basic information!</p><br>
          <a class="a btn" href="{{url('/user/profile')}}">click here</a>
          <img src="\img\edit.png" width="90px"  alt="">
        </div>
    
        <div class="box red">
         <b> <h2>View Available Courses</h2></b>
          <p>Click here to see all courses available to you!</p><br>
          <a class="a btn" href="{{url('/studentcourse')}}">click here</a>
         <a href="{{url('/studentcourse')}}"><img src="\img\course-icon.jpg" width="90px" alt=""></a>
        </div>
    
        <div class="box box-down blue">
          <b><h2>Make Payment</h2></b>
          <p>Click here to pay for your approved course online.</p><br>
          <a class="a btn" href="{{url('/payment')}}">click here</a>
          <a href="{{url('/payment')}}"><img src="\img\pay.jpg" width="80px" alt=""></a>
        </div>
      </div>
      <div class="row2-container">
        <div class="box orange">
          <b><h2>Check Application Status</h2></b>
          <p>See if your course(s) have been approved.</p><br>
          <a class="a btn" href="{{url('/applicationstatus')}}">click here</a>
          <a href="{{url('/applicationstatus')}}"><img src="\img\status.png" width="80px" height="80px" alt=""></a>
        </div>
      </div>
      <footer class="w-full border-t bg-white pb-12 ">

        <div class="w-full container mx-auto flex flex-col items-center">
            <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
                <a href="/aboutus" class="uppercase px-3">About Us</a>
                <a href="/contactus" class="uppercase px-3">Contact Us</a>
            </div>
            <div class="uppercase pb-6"> Amberheartacademy.com</div>
        </div>
    </footer>
</x-app-layout>

</body>
</html>

   
