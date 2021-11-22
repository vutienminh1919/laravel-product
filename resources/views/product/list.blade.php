
<table border="1px" class="table">
    <a href="{{route('products.create')}}">them moi product</a>
    <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th colspan="3">Action</th>
    </thead>
    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td><a  href="{{route("products.showFormEdit",$product->id)}}">Edit</a></td>
            <td><a href="{{route('products.show',$product->id)}}">Detail</a></td>
            <td><a onclick="return confirm(' Are you sure ? ')" href="{{route('products.delete',$product->id)}}">Delete</a></td>

        </tr>
    @endforeach
</table>

</body>
</html>

