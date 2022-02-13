@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
<div class="container">
    <div class="row p-5">
        <div class="text-center">
            <h3>Your payment is still pending!</h3>
            <p>Click button below if you wish to proceed the payment</p>
            {{-- <h3>Bill ID : {{ $payment->senangpay_id }}</h3> --}}
            <div class="py-3" style="font-size: 10rem; color: red;">
                <i class="bi bi-x-circle"></i>
            </div>
            <hr>
            <a href="https://toyyibpay.com/{{ $payment->toyyib_billcode }}" class="btn btn-dark">Proceed >></a>
        {{-- <p> Please feel free to contact us and show the <b>Bill ID</b> if you wish to proceed the payment, thank you.</p> --}}
        </div>
    </div>
</div>
@endsection