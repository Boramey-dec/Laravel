<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h2> Index method of Blogs</h2>
    <p>{{$name}}</p>
    <p>{{$code}}</p>

  <!-- array -->
    @foreach($data as $product)
    <p>{{$product}}</p>
    @endforeach

    <p>Product2: {{$data1}}</p>

</body>
</html>
