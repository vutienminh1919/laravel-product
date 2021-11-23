@extends('backend.layout.master')
@section('title','Admin')
@section('content')
    <div class="container">
        <table border="1px" class="table"  >
            <a href="{{route('users.create')}}">them moi user</a>
            <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
{{--            <th>Password</th>--}}
            <th>Create at </th>
            <th>Update at</th>
            <th colspan="3" style="text-align: center">Action</th>
            </thead>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
{{--                    <td>{{$user->password}}</td>--}}
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td><a type="button" class="btn btn-success" href="{{route("users.showFormEdit",$user->id)}}">Edit</a></td>
                    <td><a type="button" class="btn btn-info" href="{{route('users.show',$user->id)}}">Detail</a></td>
                    <td><a type="button" class="btn btn-danger" onclick="return confirm(' Are you sure ? ')" href="{{route('users.delete',$user->id)}}">Delete</a></td>

                </tr>
            @endforeach
        </table>
    </div>

@endsection







