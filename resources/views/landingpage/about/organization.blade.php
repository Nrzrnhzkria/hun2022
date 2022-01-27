@extends('layouts.app')

@section('title')
    Organization
@endsection

@section('content')

<div class="container py-4">
    <div class="row px-2">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
            <h1>Organizational Chart</h1>
        </div>

        <div class="card px-4 py-4" style="background-image: url('{{ asset('assets/img/about/orgbg.png') }}');">
            <img class="img-fluid" src="{{ asset('assets/img/about/org.png') }}" style="width: 40rem">
        </div>
    </div>
</div>

@endsection