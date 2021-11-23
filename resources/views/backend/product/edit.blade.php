@extends('backend.layout.master')
@section('content')
<form method="post">

    @csrf
    <input type="text" name="name" value="{{$product->name}}">
    <input type="text" name="description" value="{{$product->description}}">
    <input type="text" name="price" value="{{$product->price}}">
    <button type="submit">Update</button>

</form>
@endsection
