@extends('layouts.app')

@section('content')
<table class="table table-hover">

    <thead>

      <th>Name</th>

      <th>Email</th>

    </thead>

    <tbody>
@foreach($users as $user)

        <tr>

          <td>{{$user->name}} </td>

          <td>{{$user->email}} </td>

        </tr>
@endforeach

    </tbody>

</table>
@endsection