
@extends('backend.layout.master')
@section('content')
<form method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name">
{{--    <input type="text" name="description">--}}
    <textarea name="description" cols="30" rows="10"></textarea>
    <input type="text" name="price">
    <input type="file" name="file">
    <button type="submit">Them moi</button>

</form>
@endsection


