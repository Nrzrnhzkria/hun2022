@extends('layouts.admin-panel')

@section('title')
    Coupon
@endsection

@section('content')

<div class="container">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
        <h1 class="h2">Coupon</h1>
    </div>

    @if ($message = Session::get('updatecoupon'))
    <div class="alert alert-info alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('deletecoupon'))
    <div class="alert alert-info alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif
    
    <div class="row">
        
        <div class="col-md-12">
            <div class="float-right pt-3">{{ $coupons->links() }}</div>
            @if(count($coupons) > 0)
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Vendor ID</th>
                            <th scope="col">Coupon No.</th>
                            {{-- <th scope="col">Image</th> --}}
                            <th scope="col">Category</th>
                            <th scope="col" class="text-center"><i class="bi bi-sliders"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coupons as $key => $coupon)
                        <tr>
                            <th scope="row">{{ $coupons->firstItem() + $key }}</th>
                            <td>{{ $coupon->vendor_id }}</td>
                            <td>{{ $coupon->coupon_no }}</td>
                            {{-- <td><img src="{{ $coupon->img_name }}" width="80rem"></td> --}}
                            <td>{{ $coupon->category }}</td>
                            <td class="text-center">
                                <a href="{{ url('update-coupon') }}/{{ $coupon->id }}" class="btn btn-dark"><i class="bi bi-chevron-right"></i></a>
                            </td>
                        </tr>                
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
              <p>There are no coupon to display.</p>
            @endif
        </div>
    </div>
    
</div>

@endsection