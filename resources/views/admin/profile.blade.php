@extends('layouts.admin.app')

@section('content')
    <h1>Your Profile</h1>
    <hr>
    <div class="container d-flex justify-content-start my-3">
        <span class="font-weight-bold h4 mx-2">Username: </span><span class="text-muted h4 mx-2">{{$user->username}}</span>
    </div>
    <div class="container d-flex justify-content-start my-3">
        <span class="font-weight-bold h4 mx-2">Your Name: </span><span class="text-muted h4 mx-2">{{$user->name}}</span>
    </div>
    <div class="container d-flex justify-content-start my-3">
        <span class="font-weight-bold h4 mx-2">Your Email: </span><span class="text-muted h4 mx-2">{{$user->email}}</span>
    </div>
    <hr class="my-3">
    <div class="container">
        <p class="h4">Your Roles Access: </p>
        <ul>
            @foreach ($user->roles as $role)
                <li>{{$role->name}}</li>
            @endforeach
        </ul>
    </div>
    <hr class="my-3">
    <div class="container">
        @if (Session::has('status_change_password'))
            <div class="alert alert-success">{{ Session::get('status_change_password') }}</div>
        @endif
        <p class="h5">Change Your Password Here:</p>
        <form action="{{route('auth.profile.change-password')}}" method="POST">
            @csrf
            <div class="form-group my-3">
                <label for="current_password">Current Password:</label>
                <input type="password" name="current_password" class="form-control" id="current_password" placeholder="Current Password...">
                @error('current_password')
                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group my-3">
                <label for="new_password">New Password:</label>
                <input type="password" name="new_password" class="form-control" id="new_password" placeholder="New Password...">
                @error('new_password')
                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group my-3">
                <label for="new_password_confirmation">Confirm New Password:</label>
                <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation" placeholder="Confirm New Password...">
                @error('new_password_confirmation')
                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <section class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </section>
        </form>
        <hr>
    </div>
@stop
