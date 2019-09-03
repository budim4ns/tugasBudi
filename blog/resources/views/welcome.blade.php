<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
       <!--  <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> -->

        <title>E-Magazine</title>

        <!-- Fonts -->
       <link rel="stylesheet" type="text/css" href="{{asset('css/welcome.css')}}">

        <!-- Styles -->
       
    </head>
    <body>
        
            <section> 

                    <div  class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="log">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                           
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                        
                    @endif
                
            @endif

           <!--  <div class="content">
                <div class="title m-b-md"> -->
               
                <!-- </div> -->

               
            </div>  

                   <h1>E-Magazine</h1>
           </section>
        </div>
    </body>
</html>
