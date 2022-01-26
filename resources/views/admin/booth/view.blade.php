@extends('layouts.admin-panel')

@section('title')
    Booth
@endsection

@section('content')

<div class="container">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
        <h1 class="h2">Booth</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            {{-- <a href="/create-booth" class="btn btn-outline-dark"><i class="bi bi-plus-lg"></i> Add Booth</a> --}}
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#newbooth">
                <i class="bi bi-plus-lg"></i>New Booth
            </button>
            <!-- Modal -->
            <div class="modal fade" id="newbooth" tabindex="-1" role="dialog" aria-labelledby="newboothLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Booth</h5>
                        </div>
                        <form action="{{ url('store-booth') }}" method="POST"> 
                            @csrf
                            <div class="form-group row px-4">
                                <label for="ic" class="col-sm-4 col-form-label">Booth Name</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" name="booth_name" placeholder="Entrepreneur Booth" required>
                                </div>
                            </div>
                            <div class="col-md-12 text-end p-4">
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
            <div class="float-right pt-3">{{ $booths->links() }}</div>
            @if(count($booths) > 0)
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
                        @foreach ($booths as $key => $booth)
                        <tr>
                            <th scope="row">{{ $booths->firstItem() + $key }}</th>
                            <td>{{ $booth->booth_name }}</td>
                            <td class="text-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#update{{ $booth->booth_id }}">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="update{{ $booth->booth_id }}" tabindex="-1" role="dialog" aria-labelledby="updateboothLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header border-bottom-0">
                                                <h5 class="modal-title" id="exampleModalLabel">Update Booth</h5>
                                            </div>
                                            <form action="{{ url('edit-booth') }}/{{ $booth->booth_id }}" method="POST"> 
                                                @csrf
                                                <div class="form-group row px-4">
                                                    <label for="ic" class="col-sm-4 col-form-label">Booth Name</label>
                                                    <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="booth_name" value="{{ $booth->booth_name }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-end p-4">
                                                    <button type="submit" class="btn btn-success"> <i class="bi bi-save"></i> Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('booth-details') }}/{{ $booth->booth_id }}" class="btn btn-dark"><i class="bi bi-chevron-right"></i></a>
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