<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Manager</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Welcome to the Inventory Manager</h1>
    <div id="links">
        <a href="{{ route('products.index') }}">View Products ({{$products}})</a>
        <a href="{{ route('categories.index') }}">View Categories ({{ $categoryCount }})</a>
    </div>
</body>
</html>