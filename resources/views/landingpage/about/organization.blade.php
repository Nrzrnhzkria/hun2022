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
        <img class="img-fluid" src="{{ asset('assets/img/organization.png') }}" width="300rem">
    </div>
</div>

@endsection