<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta http-equiv="refresh" content="3" href="{{url('/dashboard')}}" /> --}}
    <title>Application Status</title>

   <!-- Tailwind -->
   <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.7.0/dist/tailwind.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{-- msg success --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <style>

        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
/* msg success */
body {
        text-align: center;
        padding: 40px 0;
        /* background: #EBF0F5; */
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #739ec9;
        display: inline-block;
        margin: 0 auto;
      }
 
     </style>

</head>

   
    
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>We received your payment.<br/> We'll be in touch shortly!</p>
      </div>
    
      <script>
        var timer = setTimeout(function() {
            window.location='{{url('/dashboard')}}'
        }, 3000);
    </script>
    



       <x-guest-layout>
       {{-- <x-jet-authentication-card> --}}
        <x-slot name="logo">
            {{--            <x-jet-authentication-card-logo />--}}
        </x-slot>
	

		</div>
	</div>
				
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

    

</x-guest-layout>




</body>
</html>


