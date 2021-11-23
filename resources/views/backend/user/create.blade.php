@extends('backend.layout.master')
@section('content')
    <form method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="text" name="password">
        <button type="submit">Them moi</button>

    </form>
@endsection



