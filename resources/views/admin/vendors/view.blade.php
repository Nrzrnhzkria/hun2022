@extends('layouts.admin-panel')

@section('title')
    Vendors
@endsection

@section('content')

<div class="container">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
        <h1 class="h2">Vendors</h1>
    </div>

    @if ($message = Session::get('updatevendor'))
    <div class="alert alert-info alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('deletevendor'))
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
                            <th scope="col">Amount</th>
                            <th scope="col" class="text-center">Payment Status</th>
                            <th scope="col" class="text-center"><i class="bi bi-sliders"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vendors as $vendor)
                        @foreach ($payments as $payment)
                        @if ($payment->payer_id == $vendor->id)
                        <tr>
                            <th scope="row">{{ $count++ }}</th>
                            <td>{{ $vendor->name }}</td>
                            <td>{{ $payment->amount }}</td>
                            <td class="text-center">
                                @if ( $payment->status == 'success')
                                    <span class="badge rounded-pill bg-success">Success</span>
                                @else
                                    <span class="badge rounded-pill bg-danger">Failed</span>
                                @endif
                                
                            </td>
                            <td class="text-center">
                                <a href="{{ url('update-vendor') }}/{{ $payment->id }}" class="btn btn-dark"><i class="bi bi-chevron-right"></i></a>
                            </td>
                        </tr>        
                        @endif                           
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