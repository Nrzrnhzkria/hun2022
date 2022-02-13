@extends('layouts.admin-panel')

@section('title')
    Coupon
@endsection

@section('content')

<div class="container">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
        <h1 class="h2">Coupon Category</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <a href="/create-category" class="btn btn-outline-dark"><i class="bi bi-plus"></i> New Category</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('addcategory'))
    <div class="alert alert-info alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('updatecategory'))
    <div class="alert alert-info alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('deletecategory'))
    <div class="alert alert-info alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif
    
    <div class="row">
        
        <div class="col-md-12">
            @if(count($categories) > 0)
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Category</th>
                            <th scope="col">Image</th>
                            <th scope="col" class="text-center"><i class="bi bi-sliders"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <th>{{ $category->category_name }}</th>
                            <td>{{ $category->img_name }}</td>
                            <td class="text-center">
                                <a href="{{ url('update-category') }}/{{ $category->id }}" class="btn btn-dark"><i class="bi bi-chevron-right"></i></a>
                            </td>
                        </tr>                         
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
              <p>There are no category to display.</p>
            @endif
            <div class="float-right pt-3">{{ $categories->links() }}</div>
        </div>
    </div>
    
</div>

@endsection