@extends('layouts.app')

@section('title')
    Events
@endsection

@section('content')

<div class="container">
    <div class="row px-2">
        <h1 class="text-center border-bottom pt-5">Objective</h1>

        <div class="col-md-12 pt-3">
            <div class="card px-4 py-4">

                <img class="img-fluid pb-2" src="{{ asset('assets/img/events/agenda_1.png') }}">
                <img class="img-fluid pb-2" src="{{ asset('assets/img/events/agenda_2.png') }}">
                <img class="img-fluid pb-2" src="{{ asset('assets/img/events/agenda_3.png') }}">
                <img class="img-fluid pb-2" src="{{ asset('assets/img/events/agenda_4.png') }}">
                <img class="img-fluid pb-2" src="{{ asset('assets/img/events/agenda_5.png') }}">

            </div>
        </div>
    </div>
</div>

@endsection