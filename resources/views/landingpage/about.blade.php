@extends('layouts.app')

@section('title')
    About Us
@endsection

@section('content')

<div class="container py-4">
    <div class="row">
        <div class="card px-4 py-4">
            <div class="row pb-4">
                <div class="col-md-12 text-center">        
                    <img class="img-fluid" src="{{ asset('assets/img/about/ds_abuhasan.png') }}" alt="" style="width: 20%">
                </div>
            </div>

            <div class="text-center fw-bold px-2 py-2" style="background-color: orange">PREAMBLE BY YBHG DATO' SERI ABU HASAN BIN MOHD NOR</div>

            <p>Thank god I prayed to hadrat llāhi with the meal and kindness still again
                given the opportunity and the strength to lead the Board of Commerce Small Entrepreneur Malay-
                sia (DPUKM), may be strengthened spirit to continue to strengthen the friendship between the business-
                wan-entrepreneurs in DPUKM in particular and the whole of Malaysia.</p>
            
        </div>
    </div>
</div>

@endsection