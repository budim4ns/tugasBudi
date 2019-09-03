<!DOCTYPE html>
<html>
<head>
    <title> </title>
   <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
</head>
<body style=" background: linear-gradient(35deg,#E9967A,#FFFAF0,#FAFAD2);">
@extends('layouts.app')

@section('content')
<div class="kotaks" style="width: 100%;height: 110%;">

    
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="log">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="navb">
                    <a href="#">Home</a>
                    <a href="#">Gallery</a>
                    <a href="#">Contact-Us</a>
                </div>

                <!-- <div class="panel-body">
                    Selamat Datang Di Web E-Magazine
                </div> -->
                <div class="panels">
                <div class="gadget">
                <div class="gadget2">
                <p class="gadget3">Gadget</p>
                </div>
                <p class="gadget4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
                
                </div>
                

                <div class="fashion">
                <div class="fashion2">Fashion Week
                </div>
                <p class="fashion3">Lorem ipsum dolor sit amet, consectetur adipi   sicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                


                <div class="otomotif">
                <div class="otomotif2">
                <p class="otomotif3"> Otomotif</p>
                </div>
                <p class="otomotif4">.</p></div>

                <div class="life">
                    <div class="life2">
                      <p>Lifestyle </p> 
                    </div>
                </div>

                <!-- <div style="width: 150px;height: 100px;background-color: red;margin-left: 60%;margin-top: -28%;"></div>
 -->
                <!--  <div style="width: 150px;height: 100px;background-color: red;margin-left: 60%;margin-top: -28%;"></div> -->
                
            </div>
        </div>
    </div>
</div>
</div>
@endsection

</body>
</html>