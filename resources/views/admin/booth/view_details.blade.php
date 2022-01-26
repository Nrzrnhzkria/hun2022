@extends('layouts.admin-panel')

@section('title')
    Booth
@endsection

@section('content')

<div class="container">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
        <h1 class="h2">Booth Details</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            {{-- <a href="/create-booth" class="btn btn-outline-dark"><i class="bi bi-plus-lg"></i> Add Booth</a> --}}
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#newdetails">
                <i class="bi bi-plus-lg"></i>New Details
            </button>
            <!-- Modal -->
            <div class="modal fade" id="newdetails" tabindex="-1" role="dialog" aria-labelledby="newdetailsLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Details</h5>
                        </div>
                        <form action="{{ url('store-booth-details') }}/{{ $booth_details->booth_id }}" method="POST"> 
                            @csrf
                            <div class="form-group row px-4">
                                <label for="ic" class="col-sm-4 col-form-label">Booth Type</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" name="booth_type" placeholder="6M X 6M" required>
                                </div>
                            </div>

                            <div class="form-group row px-4">
                                <label for="ic" class="col-sm-4 col-form-label">Lot Placement</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" name="lot_placement" placeholder="Island" required>
                                </div>
                            </div>
                            
                            <div class="form-group row px-4">
                                <label for="ic" class="col-sm-4 col-form-label">Price (RM)</label>
                                <div class="col-sm-8">
                                <input type="number" class="form-control" name="price" required>
                                </div>
                            </div>
            
                            <div class="col-md-12 text-end px-4 pb-4">
                                <button type="submit" class="btn btn-success"> <i class="bi bi-save"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('addbooth'))
    <div class="alert alert-info alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('updatebooth'))
    <div class="alert alert-info alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('deletebooth'))
    <div class="alert alert-info alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif
    
    <div class="row">
        
        <div class="col-md-12">
            <div class="float-right pt-3">{{ $booth_details->links() }}</div>
            @if(count($booth_details) > 0)
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Booth Name</th>
                            <th scope="col" class="text-center"><i class="bi bi-sliders"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($booth_details as $key => $booth_detail)
                        <tr>
                            <th scope="row">{{ $booth_details->firstItem() + $key }}</th>
                            <td>{{ $booth_detail->booth_type }}</td>
                            <td class="text-center">
                                <a href="{{ url('update-booth') }}/{{ $booth_detail->booth_id }}" class="btn btn-dark"><i class="bi bi-chevron-right"></i></a>
                            </td>
                        </tr>                
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
              <p>There are no booth to display.</p>
            @endif
        </div>
    </div>
    
</div>

@endsection