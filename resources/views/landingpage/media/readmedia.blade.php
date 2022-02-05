@extends('layouts.app')

@section('title')
    Media
@endsection

@section('content')

<div class="container">
    <div class="row px-2">
        <h1 class="text-center border-bottom pt-5">{{ $media->title }}</h1>
        
        <div class="col-md-12 pt-3">
            <div class="card px-4 py-4">
                <div class="row pb-4">
                    <div class="col-md-12 text-center">        
                        <img class="img-fluid" src="{{ $media->img_name }}" alt="">
                    </div>
                </div>

                <p class="text-justify">{!! $media->content !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection