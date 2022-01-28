@extends('layouts.admin-panel')

@section('title')
    Seminar
@endsection

@section('content')

<div class="container">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
        <h1 class="h2">Participant</h1>
    </div>
    
    <div class="row">
        
        <div class="col-md-12">
            <div class="float-right pt-3">{{ $participants->links() }}</div>
            @if(count($participants) > 0)
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone No</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($participants as $participant)
                        @foreach ($attendance as $attendance)
                        @if ($attendance->user_id == $participant->id)
                            <tr>
                                <th scope="row">{{ $count++ }}</th>
                                <td>{{ $participant->name }}</td>
                                <td>{{ $participant->email }}</td>
                                <td>{{ $participant->phone_no }}</td>
                            </tr>  
                        @endif                           
                        @endforeach                      
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