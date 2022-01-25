@extends('layouts.app')

@section('title')
    Media
@endsection

@section('content')

<style>
.card:hover{
    box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.2);    
    transform: scale(1.03);
    background-color: orange;
}
</style>

<div class="container">
    <div class="row px-2">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
            <h1>Media</h1>
        </div>
        @foreach ($medias as $media)
        <div class="col-md-12">
            <a href="{{ url('media') }}/{{ $media->id }}" class="text-dark text-decoration-none">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $media->img_name }}" class="img-fluid rounded-start" style="width:15rem; height:15rem" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $media->title }}</h5>
                                <p class="card-text">{{ $media->teaser}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection