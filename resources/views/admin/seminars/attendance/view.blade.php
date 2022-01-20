@extends('layouts.admin-panel')

@section('title')
    Seminar
@endsection

@section('content')

<div class="container">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
        <h1 class="h2">Seminar Attendance</h1>
    </div>

    @if ($message = Session::get('addseminar'))
    <div class="alert alert-info alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('updateseminar'))
    <div class="alert alert-info alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('deleteseminar'))
    <div class="alert alert-info alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif
    
    <div class="row">
        
        <div class="col-md-12">
            <div class="float-right pt-3">{{ $seminars->links() }}</div>
            @if(count($seminars) > 0)
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Seminar ID</th>
                            <th scope="col">User ID</th>
                            <th scope="col" class="text-center"><i class="bi bi-sliders"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($seminars as $key => $seminar)
                        <tr>
                            <th scope="row">{{ $seminars->firstItem() + $key }}</th>
                            <td>{{ $seminar->seminar_id }}</td>
                            <td>{{ $seminar->user_id }}</td>
                            <td class="text-center">
                                <a href="{{ url('update-seminar') }}/{{ $seminar->id }}" class="btn btn-dark"><i class="bi bi-chevron-right"></i></a>
                            </td>
                        </tr>                
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
              <p>There are no attendee to display.</p>
            @endif
        </div>
    </div>
    
</div>

@endsection