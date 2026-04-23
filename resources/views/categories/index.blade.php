<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
</head>
<body>
    <h1>Categories</h1>
    <a href="{{ route('categories.create') }}">Add Category</a>

    @foreach($categories as $category)
        <p>{{ $category->name }}</p>
    @endforeach
</body>
</html>