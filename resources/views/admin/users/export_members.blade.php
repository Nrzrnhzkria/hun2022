@if(count($members) > 0)
<table class="table">
    <thead>
        <th scope="col">#</th>
        <th scope="col">HUN ID</th>
        <th scope="col">Name</th>
        <th scope="col">IC No</th>
        <th scope="col">Email</th>
        <th scope="col">Phone No</th>
    </thead>
    <tbody>
        @foreach ($members as $member)
        <tr>
            <th scope="row">{{ $members->firstItem() + $key }}</th>
            <td>{{ $member->hun_id }}</td>
            <td>{{ $member->name }}</td>
            <td>{{ $member->ic_no }}</td>
            <td>{{ $member->email }}</td>
            <td>{{ $member->phone_no }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
  <p>There are no member to display.</p>
@endif