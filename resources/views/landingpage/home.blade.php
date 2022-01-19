@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')

{{-- Style for countdown --}}
<style>
    .timer {
        margin: 0 0 45px;
        color: #fff;
        display: inline-block;
        font-weight: 100;
        text-align: center;
        font-size: 60px;
    }
    .timer div {
        padding: 30px;
        border-radius: 3px;
        background: orange;
        display: inline-block;
        font-size: 40px;
        font-weight: 400;
        width: 110px;
    }
    .timer .smalltext {
        color: #888888;
        font-size: 12px;
        font-weight: 500;
        display: block;
        padding: 0;
        padding-bottom: 10px;
        width: auto;
    }
    .timer #time-up {
        margin: 8px 0 0;
        text-align: left;
        font-size: 14px;
        font-style: normal;
        color: #000000;
        font-weight: 500;
        letter-spacing: 1px;
    }
</style>

<div class="row-fluid">
    {{-- <div class="col-md-12 py-4" style="background-image: url('{{ asset('assets/img/Banner.jpg') }}'); width:100%; height:100%;"> --}}
    <div class="col-md-12 text-center pb-2" style="background-color: rgba(255, 166, 0, 0.678); width:100%; height:38%;">
        
        <div class="container p-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="timer">
                        <div class="shadow py-2">
                            <span class="days" id="day"></span> 
                            <div class="smalltext">Days</div>
                        </div>
                        <div class="shadow py-2">
                            <span class="hours" id="hour"></span> 
                            <div class="smalltext">Hours</div>
                        </div>
                        <div class="shadow py-2">
                            <span class="minutes" id="minute"></span> 
                            <div class="smalltext">Minutes</div>
                        </div>
                        <div class="shadow py-2">
                            <span class="seconds" id="second"></span> 
                            <div class="smalltext">Seconds</div>
                        </div>
                        <p id="time-up"></p>
                    </div>
                    <p class="fw-bold text-white">To go for HARI USAHAWAN NEGARA launching</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-4">

    <div class="row pb-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/white_slider.jpeg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/carousel_1.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/carousel_1.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="row py-4">        
        <div class="table-responsive">
        <table class="table table-borderless">
            <tbody>
                <tr>
                @foreach ($news->take(4) as $new)
                    <td>
                        <div class="col-md-3">
                            {{-- <a href="/news" class="text-dark text-decoration-none"> --}}
                            <div class="card" style="width: 16.5rem;">
                                <img src="{{ $new->img_name }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">{{ $new->title }}</h5>
                                {{-- <p class="card-text">{{ $new->teaser}}</p> --}}
                                <a href="/news" class="btn btn-warning">See More >></a>
                                </div>
                            </div>
                            {{-- </a> --}}
                        </div> 
                    </td>        
                @endforeach
                </tr>
            </tbody>
        </table>       
        </div>
    </div>

    <div class="row py-4">
        <div class="col-md-5">
            <a href="http://" class="btn btn-warning text-start p-4"> 
                <h3>CLICK HERE TO KNOW MORE ABOUT HUN MEMBERSHIP AND BENEFITS</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                    consequat.
                </p>
            </a>
        </div>
        <div class="col-md-3">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="card-title">BECOME A VENDOR</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </p>
                    <a href="registration" class="btn btn-warning fw-bold">Register</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="card-title">THE EXHIBITIONS</h5>
                    <p class="card-text">
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque 
                        corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa 
                        qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita 
                        distinctio.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-md-6 text-center">
            <img class="img-fluid" src="{{ asset('assets/img/phone.png') }}" width="80rem">
        </div>
        <div class="col-md-6 align-self-center">
            <h3>DOWNLOAD HUN22 OFFICIAL <br> MOBILE APP</h3>
            <p>Available in Apple App Store and Google Playstore</p>
            <a href="#"><img class="img-fluid" src="{{ asset('assets/img/appstore.png') }}" width="23.5%"></a>
            <a href="#"><img class="img-fluid" src="{{ asset('assets/img/playstore.png') }}" width="28%"></a>
        </div>
    </div>

    <div class="row">
        <div class="brand-carousel owl-carousel">
            <img src="https://i.postimg.cc/QxPJ8hXy/brand-1.png">
            <img src="https://i.postimg.cc/pdMQjC5Q/brand-2.png">
            <img src="https://i.postimg.cc/B6qxYvgX/brand-3.png">
            <img src="https://i.postimg.cc/d14GzKHn/brand-4.png">
            <img src="https://i.postimg.cc/x8ZM13Sz/brand-5.png">
            <img src="https://i.postimg.cc/B6qxYvgX/brand-3.png">
        </div>
    </div>
    
</div>

{{-- @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif --}}

{{-- Countdown --}}
<script>
    var deadline = new Date("mar 24, 2022 00:00:00").getTime();             
    var x = setInterval(function() {
    var currentTime = new Date().getTime();                
    var t = deadline - currentTime; 
    var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
    var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
    var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
    var seconds = Math.floor((t % (1000 * 60)) / 1000); 
    document.getElementById("day").innerHTML = days ; 
    document.getElementById("hour").innerHTML = hours; 
    document.getElementById("minute").innerHTML = minutes; 
    document.getElementById("second").innerHTML = seconds; 
    if (t < 0) {
        clearInterval(x); 
        document.getElementById("time-up").innerHTML = "TIME UP"; 
        document.getElementById("day").innerHTML ='0'; 
        document.getElementById("hour").innerHTML ='0'; 
        document.getElementById("minute").innerHTML ='0' ; 
        document.getElementById("second").innerHTML = '0'; 
    } 
    }, 1000);  
</script>

{{-- Slick Slider --}}
<script type="text/javascript">
    $('.brand-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        responsive:{
            0:{
            items:3
            },
            600:{
            items:4
            },
            1000:{
            items:5
            }
        }
    }) 

</script>
@endsection