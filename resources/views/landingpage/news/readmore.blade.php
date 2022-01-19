@extends('layouts.app')

@section('title')
    News
@endsection

@section('content')

<div class="container">
    <div class="row px-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
            <h1>News</h1>
        </div>
        <div class="col-md-12">
            <div class="card px-4 py-4">
                <div class="row pb-4">
                    <div class="col-md-12 text-center">        
                        <img class="img-fluid" src="{{ $new->img_name }}" alt="">
                    </div>
                </div>

                <div class="fw-bold px-2 py-2" style="background-color: orange">{{ $news->title }}</div>

                <p class="text-justify">{{ $news->content }}</p>
            </div>
        </div>
    </div>
</div>

@endsection