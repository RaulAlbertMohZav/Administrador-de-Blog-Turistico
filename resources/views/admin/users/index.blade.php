@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <p class="font-weight-bold h2">Manage Users</p>
        <hr>
        <div class="container">
            <a href="{{route('users.create')}}" class="btn btn-primary btn-md text-white"><i class="fas fa-user-plus mx-2"></i>Create New User</a>
        </div>
        <div class="mt-5">
        {{---------------------------}}
            <table id="example" class="display cell-border hover" style="width:100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Status verified email</th>
                    <th>Created At</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                {{$user->getRouteKey()}}
                            </td>
                            <td>
                                {{$user->username}}
                            </td>
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                                {{$user->email}}
                            </td>
                            <td>
                                @if(count($user->roles)>0)
                                    @foreach ($user->roles as $role)
                                        <span class="font-weight-bold mx-1">{{$role->name}}</span>
                                    @endforeach
                                @else
                                    Has no assigned roles
                                @endif
                            </td>
                            <td>
                                @if($user->email_verified_at)
                                    <span class="badge badge-success">True</span>
                                    @else
                                    <span class="badge badge-danger">False</span>
                                @endif
                            </td>
                            <td>
                                {{$user->created_at->format("Y-m-d h:m:s")}}
                            </td>
                            <td class="d-flex justify-content-center align-items-center">
                                <span class="d-flex justify-content-center">
                                    <a href="{{ route('users.edit', $user->getRouteKey())  }}" class="btn btn-small btn-success mx-2" >
                                        <i class="fas fa-user-edit text-white d-block mx-auto"></i>
                                    </a>
                                </span>
                                <span class="d-flex justify-content-center">
                                    <form action="{{route('users.destroy', $user->getRouteKey())}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-small btn-success mx-2" >
                                            <i class="fas fa-user-times text-white d-block mx-auto"></i>
                                        </button>
                                    </form>

                                </span>
                            </td>
                        </tr>

                    @endforeach
                </tbody>


                {{--<tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
                </tfoot>--}}
            </table>
        {{---------------------------}}



        </div>
    </div>
@endsection

@section('js')
    <script>
        (function(){
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        })()
    </script>
@stop
