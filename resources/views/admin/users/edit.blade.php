@extends('layouts.admin.app')

@section('content')
    <h1>Edit User:  {{$user->username}}</h1>
    <hr>
    <div class="container">

        <form action="{{route('users.update', $user->getRouteKey())}}" method="POST">
            @csrf
            @method('PUT')
            <section class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="{{old('username', $user->username)}}" required>
                @error('username')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                @enderror
            </section>
            <section class="form-group">
                <label for="exampleInputEmail1">Your Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name', $user->name)}}" required>
                @error('name')
                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                @enderror
            </section>
            <section class="form-group">
                <label for="exampleInputEmail1">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{old('email', $user->email)}}" required>
                <small id="emailHelp" class="form-text text-muted">If you change your email, you will need to verify..</small>
                @error('email')
                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                @enderror
            </section>
            <div class="container my-3">
                <p class="h1">Select Roles</p>
                <div class="container">
                    @foreach ($roles as $role)
                        <div class="form-check my-2">
                            <input class="form-check-input" type="checkbox" value="{{$role->id}}" id="role-{{$role->id}}" name="roles[]" @if($user->roles->contains($role)) checked @endif>
                            <label class="form-check-label" for="role-{{$role->id}}">
                                {{$role->name}}


                            </label>
                        </div>
                    @endforeach
                    @error('roles')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

            </div>
            <button type="submit" class="btn btn-success" type="submit">Submit</button>
        </form>
    </div>
@stop
