<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make Payment</title>

   <!-- Tailwind -->
   <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

{{-- error --}}
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> --}}

    <style>

        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
/* form css */

*:focus {
	 outline: none;
}
 .left {
	 width: 70%;
	 float: left;
	 clear: both;
}
 .right {
	 width: 30%;
	 float: right;
	 margin-bottom: 25px;
}
 body {
	 height: auto;
	 min-height: calc(100vh);
	 font-family: 'Lato', sans-serif;
	 font-weight: 500;
}
 body #wrapper {
	 height: 100vh;
	 display: flex;
	 display: -webkit-flex;
	 -webkit-align-items: center;
	 align-items: center;
	 -webkit-justify-content: center;
	 justify-content: center;
}
 body #wrapper #container {
	 background: white;
	 height: 440px;
	 min-width: 1000px;
	 width: 800px;
	 z-index: 1;
	 -webkit-box-shadow: 0px 3px 15px -1px rgba(0, 0, 0, 0.2);
	 -moz-box-shadow: 0px 3px 15px -1px rgba(0, 0, 0, 0.2);
	 box-shadow: 0px 3px 15px -1px rgba(0, 0, 0, 0.2);
}
 body #wrapper #container #left-col {
	 width: 54%;
	 min-width: 240px;
	 height: 100%;
	 float: left;
	 background: #000000;
}
 body #wrapper #container #left-col #left-col-cont {
	 margin: 20px 25px;
	 color: white;
}
 body #wrapper #container #left-col #left-col-cont h2 {
	 margin: 25px 0 0 0;
}
 body #wrapper #container #left-col #left-col-cont div.item {
	 margin: 30px 0;
	 clear: both;
}
 body #wrapper #container #left-col #left-col-cont {
	 width: 90%;
	 float: left;
}
 body #wrapper #container #left-col #left-col-cont div.item .img-col img {
	 width: 100%;
	 max-height: 100px;
}
 body #wrapper #container #left-col #left-col-cont div.item p {
	 font-size: 0.9em;
	 // margin: 5px 0 0 5px;
	 opacity: 0.5;
}
 body #wrapper #container #left-col #left-col-cont p#total {
	 text-transform: uppercase;
	 text-align: left;
	 font-size: 0.7em;
	 opacity: 0.5;
	 margin: 115px 0 5px 0;
}
 body #wrapper #container #left-col #left-col-cont h4#total-price {
	 text-align: left;
	 font-size: 2em;
	 margin: 0;
}
 body #wrapper #container #left-col #left-col-cont h4#total-price span {
	 color: #ffffff;
}
 body #wrapper #container #right-col {
	 width: 35%;
	 min-width: 100px;
	 height: 100%;
	 margin: 20px 40px;
	 float: right;
}
 body #wrapper #container #right-col h2 {
	 float: left;
	 margin: 6px 0 0 0;
}
 body #wrapper #container #right-col div#logotype {
	 float: right;
	 margin: 4px 0 0 0;
}
 body #wrapper #container #right-col div#logotype img {
	 width: 60px;
	 height: auto;
}
 body #wrapper #container #right-col div#logotype img#visa {
	 margin-top: -10px;
}
 body #wrapper #container form {
	 margin: 80px auto 0;
	 width: 100%;
}
 body #wrapper #container form #cardnumber {
	 background: white;
	 width: 95%;
	 padding: 4px 6px;
	 border-radius: 3px;
	 border: 1px solid lightgrey;
}
 body #wrapper #container form #cardnumber input {
	 display: inline-block;
	 font-family: 'Lato', sans-serif;
	 width: 90%;
	 padding: 4px 6px;
	 letter-spacing: 6px;
	 font-size: 0.9em;
	 border: none;
	 background: none;
}
 body #wrapper #container form #cardnumber input::-webkit-input-placeholder {
	 opacity: 0.5;
}
 body #wrapper #container form #cardnumber input::-moz-placeholder {
	 opacity: 0.5;
}
 body #wrapper #container form #cardnumber input[type=number]::-webkit-inner-spin-button, body #wrapper #container form #cardnumber input [type=number]::-webkit-outer-spin-button {
	 -webkit-appearance: none;
	 margin: 0;
}
 body #wrapper #container form #cardnumber span.divider {
	 color: rgba(0, 0, 0, .3);
}
 body #wrapper #container form label {
	 display: block;
	 font-family: 'Lato', sans-serif;
	 font-size: 0.7em;
	 font-weight: 600;
	 text-transform: uppercase;
	 margin: 14px 0 4px;
}
 body #wrapper #container form label#cvc-label i {
	 cursor: pointer;
	 margin-left: 3px;
}
 body #wrapper #container form input {
	 display: block;
	 padding: 6px 8px;
	 border: 1px solid lightgrey;
	 border-radius: 2px;
	 font-size: 0.9em;
}
 body #wrapper #container form input:focus {
	 border-color: #e67e22;
}
 body #wrapper #container form input::-webkit-input-placeholder {
	 opacity: 0.5;
}
 body #wrapper #container form input::-moz-placeholder {
	 opacity: 0.5;
}
 body #wrapper #container form input#cardholder {
	 width: calc(100% - 18px);
}
 body #wrapper #container form input#cvc {
	 width: calc(100% - 18px);
}
 body #wrapper #container form select {
	 border: 1px solid lightgrey;
	 border-radius: 2px;
	 background: none;
	 width: 90px;
	 font-weight: 500;
	 font-size: 0.9em;
	 padding: 6px 8px;
	 color: black;
	 -webkit-appearance: none;
	 -moz-appearance: none;
	 appearance: none;
}
 body #wrapper #container form button {
	 display: block;
	 width: 100%;
	 border: none;
	 border-radius: 2px;
	 padding: 8px 0;
	 font-size: 0.8em;
}
 body #wrapper #container form button#purchase {
	 background: #e67e22;
	 color: white;
	 margin: 0 0 8px;
	 font-size: 0.9em;
}
 body #wrapper #container form button#paypal {
	 background: none;
	 border: 1px solid lightgrey;
}
 body #wrapper #container form button#paypal:hover {
	 background: #003087;
	 border-color: #003087;
	 color: white;
}
 body #wrapper #container form button#paypal:hover i {
	 color: #009cde;
}
 body #wrapper #container form button#paypal i {
	 color: #003087;
}
 body #wrapper #container form p#support {
	 font-size: 0.7em;
	 text-align: center;
	 color: rgba(0, 0, 0, .5);
}
 body #wrapper #container form p#support a {
	 text-decoration: none;
	 color: inherit;
	 padding: 0 1px 2px 1px;
	 border-bottom: 1px solid rgba(0, 0, 0, .5);
}
 body #wrapper #container form p#support a:hover {
	 padding-bottom: 3px;
}
 body #dailyui {
	 position: fixed;
	 font-size: 15em;
	 font-weight: 700;
	 margin: 0 0 -55px 0;
	 padding: 0;
	 right: 0;
	 bottom: 0;
	 color: rgba(0, 0, 0, .3);
	 z-index: 0;
	 text-align: right;
	 font-family: 'proxima-nova', 'Lato', sans-serif;
}

/* table */
table{
    margin-left:4.5em;
    margin-top:5em;
width:350px;
}
tr{
    text-align:center;
}
th{
	width: 100px;
}
.errormsg{
color: red;
}

     </style>

</head>

<body class="bg-white font-family-karla">
	<x-app-layout>

       <div class="w-full bg-blue-800  mx-auto">
       <h1 class="flex flex-col items-center text-white text-2xl py-8">Make Payment</h1>
       </div>

       <x-guest-layout>
       {{-- <x-jet-authentication-card> --}}
        <x-slot name="logo">
            {{--            <x-jet-authentication-card-logo />--}}
        </x-slot>



<div id="wrapper">
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
	<div id="container">
		<div id="left-col">
			<div id="left-col-cont">
        <table class="tablealign">
                    <th>Course Name</th>
                    <th>Course Cost</th>

                    {{$coursetotal= null}}
                    @foreach($data as $course)


                    @if ($course->response == '1')
                        <tr>
                            <td>{{$course->student_course}}</td>
                            <td>{{$course->cost}}</td>
                         <?php $coursetotal= $coursetotal+$course->cost?>
                        </tr>
                     @endif
					 @endforeach
                </table>



				<p id="total">Total Cost</p>
				<h4 id="total-price"><span>$</span> {{$coursetotal}}</h4>
			</div>
		</div>
		<div id="right-col">
			<h2>Payment</h2>
			<div id="logotype">
				<img id="mastercard" src="http://emilcarlsson.se/assets/MasterCard_Logo.png" alt="" />
			</div>

			<form action="{{route('makingpayment')}}" method="POST">
				@csrf
				<label for="">Cardnumber</label>
				<div id="cardnumber">
				    <input name="cardnumber" type="text"  placeholder="0000-0000-0000-0000" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}"/>
				 </div>

				<label for="">Cardholder</label>
				<input name="cardholder" id="cardholder" type="text" placeholder="John Doe" />

				<div class="left">
					<label for="">Expiration Date</label>

					<select name="month" id="month" onchange="" size="1">
						<option >Month</option>
						<option value="01">January</option>
						<option value="02">February</option>
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">August</option>
						<option value="09">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
					</select>
					<select name="year" id="year" onchange="" size="1">
						<option >Year</option>
						<option value="01">2016</option>
						<option value="02">2017</option>
						<option value="03">2018</option>
						<option value="04">2019</option>
						<option value="05">2020</option>
						<option value="06">2021</option>
						<option value="07">2022</option>
						<option value="08">2023</option>
						<option value="09">2024</option>
						<option value="10">2025</option>
					</select>
				</div>

				<div class="right">
					<label id="cvc-label" for="">CVC {{--<i class="fa fa-question-circle-o" aria-hidden="true"></i>--}}</label>
					<input name="cvc" id="cvc" type="text" placeholder="123" maxlength="3" />
				</div>

				@if (Session()->get('payment_count')== "nopayment")

				<button id="purchaseunavailable" name="">Unavailable</button>

				@else
				<button id="purchase" name="submit">Purchase</button>
				@endif

				{{-- <button id="paypal"><i class="fa fa-paypal" aria-hidden="true"></i> Pay with PayPal</button> --}}
				<p id="support">Having problem with checkout? <a href="{{url('contactus')}}">Contact our support</a>.</p>
				{{-- <x-jet-validation-errors class="mb-4" /> --}}

			</form>

		</div>
	</div>
				{{-- <div>
					@if ($msg = Session::get('failure'))
						<div class="alert alert-success">

							<strong>{{ $msg }}</strong>
						</div>
					@endif
				</div> --}}
</div>
    </div>





            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            {{-- <div class="flex items-center justify-end mt-4">
                <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> -->

                <!-- <x-jet-button class="ml-4 importar">
                    {{ __('Apply') }}
                </x-jet-button> -->

            </div>
            <br> <x-jet-validation-errors class="mb-4" />

        </form> --}}
    {{-- </x-jet-authentication-card> --}}

</x-guest-layout>


<footer>

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
{{-- <table>
    <th>Course Name</th>
    <th>Course Cost</th>
    <th>Application Status</th>

    @foreach(Session()->get('app_stat') as $course)


    @if ($course->response == '1')
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

      @endif
    @endforeach
</table> --}}
</body>
</html>



</x-app-layout>
