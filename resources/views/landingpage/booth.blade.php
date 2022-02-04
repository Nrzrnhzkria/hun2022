@extends('layouts.app')

@section('title')
    Booth
@endsection

@section('content')

<div class="container">
    <div class="row px-2">
        <h1 class="text-center border-bottom pt-5">Booth</h1>

        <div class="col-md-12 pt-3">
            <div class="card mb-3">
                <img class="img-fluid" src="{{ asset('assets/img/events/booth2.jpg') }}">
            </div>
        </div>
    </div>
</div>

@endsection