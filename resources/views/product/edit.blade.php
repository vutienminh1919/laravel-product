<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">

    @csrf
    <input type="text" name="name" value="{{$product->name}}">
    <input type="text" name="description" value="{{$product->description}}">
    <input type="text" name="price" value="{{$product->price}}">
    <button type="submit">Update</button>

</form>

</body>
</html>