@extends('layout')

@section('content')

<div class="container">
   @if(session()->get('success'))
        <div class="alert alert-success">{{session()->get('success')}}</div>
   @endif

   
   <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client )
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->first_name}}</td>
                    <td>{{$client->last_name}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->phone}}</td>
                    <td>{{$client->password}}</td>
               
                </tr>
            @endforeach
        </tbody>
    </table>
</div>




@endsection