@extends('layouts.admin-panel')

@section('title')
    Vendors
@endsection

@section('content')

<div class="container pb-4">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
        <h1 class="h2">Vendor Information</h1>
    </div>

    <div class="row justify-content-center py-3">
        <div class="col-md-10">
            <div class="card py-5">
                <div class="card-body">
                    <form class="row g-3 px-3" method="POST" action="{{ url('edit-vendor') }}/{{ $vendor->id }}">
                        @csrf

                        <div class="row p-3">

                            <div class="col-md-12 pb-2">
                                <label>Name of Company:</label>
                                <input type="text" value="{{ $details->company_name }}" class="form-control form-control-sm" placeholder="Company Sdn Bhd"  name="company_name" readonly>
                            </div>
        
                            <div class="col-md-6 pb-2">
                                <label>Contact Person:</label>
                                <input type="text" value="{{ $vendor->name  }}" class="form-control form-control-sm" placeholder="Mohammad"  name="name" readonly>
                            </div>
                        
                        </div>
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $vendor->name }}" required autocomplete="name">
            
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $vendor->email }}" required autocomplete="email">
            
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ $vendor->password }}" required autocomplete="new-password">
            
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ $vendor->password }}" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone_no" class="col-md-4 col-form-label text-md-end">Phone No</label>

                            <div class="col-md-6">
                                <input id="phone_no" type="text" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{ $vendor->phone_no }}" required autocomplete="phone_no">
            
                                @error('phone_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ic_no" class="col-md-4 col-form-label text-md-end">IC No</label>

                            <div class="col-md-6">
                                <input id="ic_no" type="text" class="form-control @error('ic_no') is-invalid @enderror" name="ic_no" value="{{ $vendor->ic_no }}" required autocomplete="ic_no">

                                @error('ic_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end">Role</label>

                            <div class="col-md-6">
                                <select class="form-select" aria-label="Default select example">
                                    <option class="text-capitalize" value="{{ $vendor->role }}" selected>{{ $vendor->role }}</option>
                                    <option value="superadmin">Superadmin</option>
                                    <option value="admin">Admin</option>
                                    <option value="advisor">Advisor</option>
                                    <option value="members">Members</option>
                                    <option value="vendor">Vendor</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary float-right">
                                    <i class="bi bi-save"></i> Save Changes
                                </button>
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $vendor->id }}"><i class="bi bi-trash"></i></button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $vendor->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Are you sure you want to delete this vendor ?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a class="btn btn-danger" href="{{ url('delete-vendor') }}/{{ $vendor->id }}">Delete</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection