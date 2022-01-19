@extends('layouts.app')

@section('title')
    News
@endsection

@section('content')

<div class="container py-4">
    <div class="row">
        <div class="col-md-12">
            @foreach ($news as $new)
            <a href="/news" class="text-dark text-decoration-none">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $new->img_name }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $new->title }}</h5>
                                <p class="card-text">{{ $new->teaser}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>

@endsection