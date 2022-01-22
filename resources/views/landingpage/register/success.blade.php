@extends('layouts.app')

@section('title')
    Register
@endsection

<style>
  body {
    background-color:rgb(233, 233, 233)!important ; 
  }
</style>

@section('content')
<div class="container">
    <div class="row px-5">
        <div class="text-center">
        <h3>You have been registered successfully!</h3>
        <div class="py-3" style="font-size: 24px; color: green;">
            <i class="bi bi-check-circle-fill"></i>
        </div>
        <hr>
        <p> The receipt will be send to your registered email address in 24 hours. Thank you for your patient.</p>
    </div>
</div>
@endsection