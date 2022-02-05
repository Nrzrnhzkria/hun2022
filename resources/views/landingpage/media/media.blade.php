@extends('layouts.app')

@section('title')
    Media
@endsection

@section('content')

<style>
.card:hover{
    box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.2);    
    transform: scale(1.01);
    background-color: orange;
}
</style>

<div class="container px-2">
    <h1 class="text-center border-bottom pt-5">Media</h1>
    
    <div class="col-md-12 pt-3">
    @foreach ($medias as $media)
        <a href="{{ url('media') }}/{{ $media->id }}" class="text-dark text-decoration-none">  
            <div class="card shadow mb-3" style="width: 18rem;">
                <img src="{{ $media->img_name }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $media->title }}</h5>
                    <p class="card-text">{{ $media->teaser}}</p>
                </div>
            </div>
        </a>
    @endforeach
    </div>
</div>

@endsection