@extends('layout')


@section('content')



<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Add Client</h2>
        </div>

        <div class="card-body">
            <form action="{{route('clients.store')}}" method="post">
                @csrf 
                <div class="form-group">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" require>
                </div>

                <div class="form-group">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" require>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" require>
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" require>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" require>
                </div>
                <div class="form-group">
                    <input type="submit" value="Add User" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection