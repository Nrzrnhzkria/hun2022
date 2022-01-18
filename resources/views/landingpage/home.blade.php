@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')

<div class="row-fluid">
    {{-- <div class="col-md-12 py-4" style="background-image: url('{{ asset('assets/img/Banner.jpg') }}'); width:100%; height:100%;"> --}}
    <div class="col-md-12 pb-2" style="background-color: orange; width:100%; height:38%;">
        <br>
        <p class="text-white text-center px-4" id="countdown"></p> 
    </div>
</div>

<div class="container py-4">

    <div class="embedsocial-hashtag" data-ref="734fec1fcac63e1d47693ea749e52165df49ae66"></div>
    {{-- <div class="row pb-4">
        <div class="col-md-12 text-center">        
            <img class="img-fluid" src="{{ asset('assets/img/white_slider.png') }}" alt="" style="width: 40%">
        </div>
    </div> --}}
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
        <div class="col-md-3">
            <a href="">
                <div class="image-container">
                    <img src="{{ asset('assets/img/1.png') }}" />
                    <div class="after p-2">
                        <p class="fw-bold">OPENING CEREMONY OF HARI USAHAWAN NEGARA BY YABHG DATO' SERI ABU HASAN BIN MOHD NOR</p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                            magna aliqua. Ut enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
            </a> 
        </div>
        <div class="col-md-3">
            <a href="">
                <div class="image-container">
                    <img src="{{ asset('assets/img/1.png') }}" />
                    <div class="after p-2">
                        <p class="fw-bold">OPENING CEREMONY OF HARI USAHAWAN NEGARA BY YABHG DATO' SERI ABU HASAN BIN MOHD NOR</p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                            magna aliqua. Ut enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>   
            </a> 
        </div>
        <div class="col-md-3">
            <a href="">
                <div class="image-container">
                    <img src="{{ asset('assets/img/2.png') }}" />
                    <div class="after p-2">
                        <p class="fw-bold">OPENING CEREMONY OF HARI USAHAWAN NEGARA BY YABHG DATO' SERI ABU HASAN BIN MOHD NOR</p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                            magna aliqua. Ut enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>  
            </a>  
        </div>
        <div class="col-md-3">
            <div class="image-container">
                <a href="">
                    <img src="{{ asset('assets/img/3.png') }}" />
                    <div class="after p-2">
                        <p class="fw-bold">OPENING CEREMONY OF HARI USAHAWAN NEGARA BY YABHG DATO' SERI ABU HASAN BIN MOHD NOR</p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                            magna aliqua. Ut enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </a>
            </div>    
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
            <img class="img-fluid" src="{{ asset('assets/img/phone.png') }}" width="60%">
        </div>
        <div class="col-md-6 align-self-center">
            <h3>DOWNLOAD HUN22 OFFICIAL <br> MOBILE APP</h3>
            <p>Available in Apple App Store and Google Playstore</p>
            <a href="#"><img src="{{ asset('assets/img/appstore.png') }}" width="23.5%"></a>
            <a href="#"><img src="{{ asset('assets/img/playstore.png') }}" width="28%"></a>
        </div>
    </div>

    <div class="row">
        <div class="brand-carousel owl-carousel">
            <div class="single-logo">
                <img src="https://i.postimg.cc/QxPJ8hXy/brand-1.png" alt="">
            </div>
            <div class="single-logo">
                <img src="https://i.postimg.cc/pdMQjC5Q/brand-2.png" alt="">
            </div>
            <div class="single-logo">
                <img src="https://i.postimg.cc/B6qxYvgX/brand-3.png" alt="">
            </div>
            <div class="single-logo">
                <img src="https://i.postimg.cc/d14GzKHn/brand-4.png" alt="">
                </div>
            <div class="single-logo">
                <img src="https://i.postimg.cc/x8ZM13Sz/brand-5.png" alt="">
            </div>
            <div class="single-logo">
                <img src="https://i.postimg.cc/B6qxYvgX/brand-3.png" alt="">
            </div>
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
    // Set the date we're counting down to
    var countDownDate = new Date("Mar 24, 2022 00:00:00").getTime();
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
        // Get today's date and time
        var now = new Date().getTime();
        
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
        
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // Output the result in an element with id="demo"
        document.getElementById("countdown").innerHTML = 
        "<div class='row justify-content-center px-4'>"  
            +"<div class='col-md-2'>"  
                + "<p class='fw-bold' style='font-size: 4rem'>" + days + "</p> <p> Days </p>" 
            + "</div>"
            +"<div class='col-md-2'>" 
                + "<p class='fw-bold' style='font-size: 4rem'>" + hours + "</p> <p> Hours </p>"
            + "</div>"
            +"<div class='col-md-2'>" 
                + "<p class='fw-bold' style='font-size: 4rem'>" + minutes + "</p> <p> Minutes </p>"
            + "</div>" 
            +"<div class='col-md-2'>" 
                + "<p class='fw-bold' style='font-size: 4rem'>" + seconds + "</p> <p> Seconds </p>"
            + "</div>"
            +"<div class='col-md-12'>"  
                + "<p> To go for HARI USAHAWAN NEGARA launching </p>" 
            + "</div>"
        + "</div>";
        
        // If the count down is over, write some text 
        if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = 
            "<div class='row'><div class='col-md-12 text-center'> <h1 style='font-size: 4rem'>EXPIRED</h1> </div></div>";
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
            items:1
            },
            600:{
            items:3
            },
            1000:{
            items:5
            }
        }
    }) 

</script>

<script>
    (function(d, s, id)
    {
        var js; if (d.getElementById(id)) 
        {
            return;
        } 
        
        js = d.createElement(s); 
        js.id = id; 
        d.getElementsByTagName("head")[0].appendChild(js);
    }
    (document, "script", "EmbedSocialHashtagScript"));
</script>
@endsection