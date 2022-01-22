@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
<div class="container">
    <div class="row px-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
            <h1>New Registration Form</h1>
        </div>
            <form action="" method="POST">
                @csrf
    
                <div class="card px-4 py-4">
                    <ul class="nav nav-tabs px-2 py-2">
                        <li class="nav-item">
                          <a class="nav-link" href="{{ url('new-registration') }}/{{ $vendor->ic_no }}">Step 1</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page">Step 2</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled">Step 3</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>

                    <div class="fw-bold px-2 py-2" style="background-color: orange">Choose Your Booth Type</div>
    
                        <div class="row p-3">

                            @if($details->nationality == 'local')
                                <div class="col-md-6 pb-2">
                                    <label for="formFileMultiple" class="form-label">Local:</label>
                                    <input class="form-control" type="file" name="img_name" id="formFileMultiple" multiple>
                                </div>
                            @elseif($details->nationality == 'international')
                                <div class="col-md-6 pb-2">
                                    <label for="formFileMultiple" class="form-label">Local:</label>
                                    <input class="form-control" type="file" name="img_name" id="formFileMultiple" multiple>
                                </div>
                            @else
                                <p>Please select your nationality</p>
                            @endif
                            
                        </div>

                    <div class="col-md-12">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-warning fw-bold">Next <i class="bi bi-chevron-double-right"></i></button>
                        </div>
                    </div>
                </div>
            </form>
    </div>
</div>
@endsection