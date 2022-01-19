@extends('layouts.app')

@section('title')
    News
@endsection

@section('content')

<div class="container py-4">
    @foreach ($news as $new)
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ $new->img_name }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">{{ $new->title }}</h5>
                <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection