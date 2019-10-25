@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
              <td>Name</td>
              <td>Address</td>
              <td>Country</td>
              <td>Gender</td>
              <td>Hobby</td>
              <td>Designition</td>
              <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
            <tr>
                <td>{{$ticket->user_name}}</td>
                <td>{{$ticket->address}}</td>
                <td>{{$ticket->country}}</td>
                <td>{{$ticket->gender}}</td>
                <td>{{$ticket->hobby}}</td>
                <td>{{$ticket->designation}}</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            @endforeach
        </tbody>
    </table>
<div>
@endsection