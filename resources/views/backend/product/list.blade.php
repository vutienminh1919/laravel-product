@extends('backend.layout.master')
@section('content')
<div class="container">
    <table border="1px" class="table" style="width: 100%">
        <a href="{{route('products.create')}}">them moi product</a>
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Create at </th>
        <th>Update at</th>
        <th colspan="3">Action</th>
        </thead>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->created_at}}</td>
                <td>{{$product->updated_at}}</td>
                <td><a  href="{{route("products.showFormEdit",$product->id)}}">Edit</a></td>
                <td><a href="{{route('products.show',$product->id)}}">Detail</a></td>
                <td><a onclick="return confirm(' Are you sure ? ')" href="{{route('products.delete',$product->id)}}">Delete</a></td>

            </tr>
        @endforeach
    </table>
</div>

@endsection




