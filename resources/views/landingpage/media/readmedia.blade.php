@extends('layouts.app')

@section('title')
    Media
@endsection

@section('content')

<div class="container">
    <div class="row px-2">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
            <h1>{{ $media->title }}</h1>
        </div>
        <div class="col-md-12">
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