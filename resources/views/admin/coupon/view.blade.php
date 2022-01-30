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
            <div class="float-right pt-3">{{ $payments->links() }}</div>
            @if(count($payments) > 0)
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Vendor</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone No</th>
                            <th scope="col" class="text-center"><i class="bi bi-sliders"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vendors as $vendor)
                        @foreach ($details as $detail)
                        @foreach ($payments as $payment)
                        @if ($vendor->user_id == $detail->user_id)
                        @if ($payment->payer_id == $vendor->user_id)
                        <tr>
                            <th scope="row">{{ $count++ }}</th>
                            <td>{{ $detail->company_name }}</td>
                            <td>{{ $vendor->email }}</td>
                            <td>{{ $vendor->phone_no }}</td>
                            <td class="text-center">
                                <a href="{{ url('update-coupon') }}/{{ $vendor->user_id }}" class="btn btn-dark"><i class="bi bi-chevron-right"></i></a>
                            </td>
                        </tr>        
                        @endif        
                        @endif                           
                        @endforeach                       
                        @endforeach                     
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
              <p>There are no vendor to display.</p>
            @endif
        </div>
    </div>
    
</div>

@endsection