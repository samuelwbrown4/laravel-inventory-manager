<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>
    @if(session('warning'))
    <p style="color: orange;">{{ session('warning') }}</p>
    @endif
    <h1>Products</h1>
    <a href="{{ route('products.create') }}">Add Product</a>

    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Category</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->category->name}}</td>
                <td>{{$product->quantity}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>