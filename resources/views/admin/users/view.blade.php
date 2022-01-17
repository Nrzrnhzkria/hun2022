@extends('layouts.admin-panel')

@section('title')
    Users
@endsection

@section('content')

<div class="container">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
    </div>

    <div class="row">
        <div class="col-md-2">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                  <a class="text-decoration-none text-dark" href=""><li class="list-group-item">An item</li></a>
                  <a class="text-decoration-none text-dark" href=""><li class="list-group-item">A second item</li></a>
                  <a class="text-decoration-none text-dark" href=""><li class="list-group-item">A third item</li></a>
                </ul>
            </div>
        </div>

        <div class="col-md-10">
            content
        </div>
    </div>
    
</div>

@endsection