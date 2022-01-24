@extends('layouts.app')

@section('title')
    Contact Us
@endsection

@section('content')

<div class="container py-4">
    <div class="row px-2">
        <div class="col-md-5 pt-5">
            
            <h3>No 30-2, Jalan 9/23A, 
            <br>Off Jalan Usahawan, 
            <br>53200 Setapak, 
            <br>Kuala Lumpur.</h3>
            <br>
            <h5>Tel : 03 - 4141 8311</h5>
            <h5>Mobile : 019 - 716 9628 / 013 - 292 2950</h5>
            <h5>Email : dahniaga@gmail.com</h5>
            <h5>Website : www.hun22.com.my</h5>

        </div>
        
        <div class="col-md-7">

            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=no%2030-2,%20jalan%209/23A,%20off%20jalan%20usahawan,%2053200%20setapak&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://fmovies-online.net"></a>
                    <br>
                    <style>
                        .mapouter{
                            position:relative;
                            text-align:right;
                            height:500px;
                            width:600px;
                        }
                    </style>
                    <a href="https://www.embedgooglemap.net">embed custom google map</a>
                    <style>
                        .gmap_canvas {
                            overflow:hidden;
                            background:none!important;
                            height:500px;
                            width:600px;
                        }
                    </style>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection