@extends('layouts.admin-panel')

@section('title')
    Users
@endsection

@section('content')

<div class="container pb-4">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
        <h1 class="h2">User Information</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="row g-3 px-3" method="POST" action="{{ url('edit') }}/{{ $user->id }}">
                        @csrf

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>HUN ID</label>
                                <input id="hun_id" type="text" class="form-control @error('hun_id') is-invalid @enderror" name="hun_id" value="{{ $user->hun_id }}" required autocomplete="hun_id">
            
                                @error('hun_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
            
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email" >Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
            
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ $user->password }}" required autocomplete="new-password">
            
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password-confirm">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ $user->password }}" required autocomplete="new-password">
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Phone No.</label>
                                <input id="phone_no" type="text" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{ $user->phone_no }}" required autocomplete="phone_no">
            
                                @error('phone_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">IC No.</label>
                                <input id="ic_no" type="text" class="form-control @error('ic_no') is-invalid @enderror" name="ic_no" value="{{ $user->ic_no }}" required autocomplete="ic_no">
            
                                @error('ic_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <select class="form-select" aria-label="Default select example">
                                <option value="{{ $user->role }}" selected>{{ $user->role }}</option>
                                <option value="superadmin">Superadmin</option>
                                <option value="admin">Admin</option>
                                <option value="advisor">Advisor</option>
                                <option value="members">Members</option>
                                <option value="vendor">Vendor</option>
                                <option value="user">User</option>
                            </select>
                            {{-- <div class="form-group">
                                <label for="name">Role</label>
                                <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ $user->role }}" required autocomplete="role">
            
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                        </div>
            
                        <div class="col-md-12 pt-3">
                            <button type="submit" class="btn btn-primary float-right">
                                <i class="bi bi-save"></i> Save Changes
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection