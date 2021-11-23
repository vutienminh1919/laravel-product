@extends('backend.layout.master')
@section('content')


    <div class="container">
        <table border="1px" class="table table-hover" style="width: 100%">
            <a href="{{route('products.create')}}">them moi product</a>
            <thead class="thead-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Create at </th>
            <th>Update at</th>
            <th colspan="3">Action</th>
            </thead>
            @foreach($products as $product)
                <tbody class="table table-striped">
                <tr>
                    <td><b>{{$product->id}}</b></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->created_at}}</td>
                    <td>{{$product->updated_at}}</td>
                    <td><a type="button" class="btn btn-success" href="{{route("products.showFormEdit",$product->id)}}">Edit</a></td>
                    <td><a type="button" class="btn btn-info" href="{{route('products.show',$product->id)}}">Detail</a></td>
                    <td><a  type="button" class="btn btn-danger" onclick="return confirm(' Are you sure ? ')" href="{{route('products.delete',$product->id)}}">Delete</a></td>

                </tr>
                </tbody>

            @endforeach
        </table>
    </div>
<div class="container">
    {{$products->links()}}</div>
@endsection








