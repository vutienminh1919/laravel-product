
@extends('backend.layout.master')
@section('content')
<form method="post">

    @csrf
    <input type="text" name="name" value="{{$user->name}}">
    <input type="text" name="description" value="{{$user->email}}">
    <input type="text" name="price" value="{{$user->password}}">
    <button type="submit">Update</button>

</form>
@endsection
