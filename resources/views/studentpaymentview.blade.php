<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta http-equiv="refresh" content="3" href="{{url('/dashboard')}}" /> --}}
    <title>View Payment</title>

   <!-- Tailwind -->
   <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>

        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
		
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
			.text{
				text-align: center;
			}
			hr.hr{
				background-color:rgba(233, 145, 14, 0.822);
				height:1em;
				margin-bottom:1em;
				
			}
		</style>
          <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

	</head>

	<body class="bg-white font-family-karla">
		<x-app-layout>
			

        
{{-- INVOICE HTML --}}


<br>
<br>
@if (session()->get('payment_count') == 'nopayment') 
			
<h1 class="text">No Receipt Available</h1>
@else

		<div class="invoice-box">
			@foreach(Session()->get('pmtdetail') as $pmtinfo)
			@if($pmtinfo->paid=='1')
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
                          	<tr>
								<td class="title">
                                    <img class="block h-9 w-auto" src="img/logo.png" alt="logo">
								</td>

								<td>
									Receipt <br />
									Created: {{$pmtinfo->created_at}}<br />
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
                            @foreach(Session()->get('userdetail') as $userinfo) 
							<tr>
								<td>
									Address:{{$userinfo->address}}<br />
									Email:{{$userinfo->email}}<br />
									
								</td>

								<td>
									Amber Heart Academy.<br />
									Electronic Receipt<br />
									amberheartacademy@gmail.com
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Payment Method</td>

					<td></td>
				</tr>

				<tr class="details">
					<td>Card</td>

					{{-- <td>1000</td> --}}
				</tr>

				<tr class="heading">
					<td>Course(s)</td>

					<td>Cost</td>
				</tr>

				<tr class="item">
					<td>{{$pmtinfo->course_name}}</td>

					<td>{{$pmtinfo->course_cost}}</td>
				</tr>

				<tr class="item last">
					
				</tr>

				<tr class="total">
					<td></td>

					<td>Total: {{$pmtinfo->amountpaid}}</td>
				</tr>
			
  @endforeach 
</table> <hr class="hr">


 @endif


 @endforeach 
 @endif
	
		</div>
	
	</body>
</html>
</x-app-layout>