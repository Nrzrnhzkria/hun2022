@extends('layouts.admin-panel')

@section('title')
    Users
@endsection

@section('content')

<div class="container">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
        {{-- <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <a href="/create-user" class="btn btn-outline-dark"><i class="bi bi-person-plus"></i> Add User</a>
            </div>
        </div> --}}
    </div>

    @if ($message = Session::get('addsuccess'))
    <div class="alert alert-info alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('updatesuccess'))
    <div class="alert alert-info alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('deleteuser'))
    <div class="alert alert-info alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif
    
    <div class="row pb-3">
        
        <div class="col-md-9">
            <div  class="float-right pt-3">{{ $users->links() }}</div>
            @if(count($users) > 0)
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">HUN ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Role</th>
                            <th scope="col" class="text-center"><i class="bi bi-sliders"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                        <tr>
                            <th scope="row">{{ $users->firstItem() + $key }}</th>
                            <td>{{ $user->hun_id }}</td>
                            <td>{{ $user->name }}</td>
                            <td class="text-capitalize">{{ $user->role }}</td>
                            <td class="text-center">
                                <a href="{{ url('update-user') }}/{{ $user->id }}" class="btn btn-dark"><i class="bi bi-chevron-right"></i></a>
                            </td>
                        </tr>                
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
              <p>There are no user to display.</p>
            @endif
        </div>

        <div class="col-md-3">
            <div class="row-fluid pb-2">
                <div class="card border-0 shadow text-center" style="height: 125px">
                  <h6 class="pt-4">Member</h6>
                  <b class="display-6 pb-3">{{ number_format($member) }}</b>
                </div>
            </div>
            <div class="row-fluid pb-2">
                <div class="card border-0 shadow text-center" style="height: 125px">
                  <h6 class="pt-4">Non-Member</h6>
                  <b class="display-6 pb-3">{{ number_format($nonmember) }}</b>
                </div>
            </div>
        </div>

    </div>
    
</div>

@endsection