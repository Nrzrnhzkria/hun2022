@extends('layouts.admin-panel')

@section('title')
    Users
@endsection

@section('content')

<div class="container">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
        <h1 class="h2">Members</h1>
    </div>

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
        
        <div class="col-md-12">
            @if(count($members) > 0)
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
                        @foreach ($members as $key => $member)
                        <tr>
                            <th scope="row">{{ $members->firstItem() + $key }}</th>
                            <td>{{ $member->hun_id }}</td>
                            <td>{{ $member->name }}</td>
                            <td class="text-capitalize">{{ $member->role }}</td>
                            <td class="text-center">
                                <a href="{{ url('update-user') }}/{{ $member->id }}" class="btn btn-dark"><i class="bi bi-chevron-right"></i></a>
                            </td>
                        </tr>                
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
              <p>There are no member to display.</p>
            @endif
            <div  class="self-align-end pt-3">{{ $members->links() }}</div>
        </div>

    </div>
    
</div>

@endsection