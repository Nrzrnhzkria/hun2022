@section('title')
    Home
@endsection

@extends('layouts.app')

@section('content')

<div class="row-fluid">
    {{-- <div class="col-md-12 py-4" style="background-image: url('{{ asset('assets/img/Banner.jpg') }}'); width:100%; height:100%;"> --}}
    <div class="col-md-12 pb-2" style="background-color: orange; width:100%; height:100%;">
        <br>
        <p class="text-white text-center px-4" id="countdown"></p> 
    </div>
</div>

<div class="container py-4">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/Banner.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/Banner.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/Banner.jpg') }}" class="d-block w-100" alt="...">
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

    <div class="row py-5">
		<div class="container">
            <section class="customer-logos slider" data-arrows="true">
                <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image1.png"></div>
                <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image2.png"></div>
                <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image3.png"></div>
                <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image4.png"></div>
                <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image5.png"></div>
                <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image6.png"></div>
                <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image7.png"></div>
                <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image8.png"></div>
            </section>
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
    var countDownDate = new Date("Feb 2, 2022 15:37:25").getTime();
    
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
    $(document).ready(function() {
       $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            dots: false,
            pauseOnHover: false,
            responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
            }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
            }]
        });
    });
</script>
@endsection