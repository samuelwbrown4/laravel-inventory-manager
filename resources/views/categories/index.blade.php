<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>
<body>
    <h1>Categories</h1>
    <a href="{{ route('categories.create') }}">Add Category</a>
    @if(session('warning'))
    <p style="color: orange;">{{ session('warning') }}</p>
    @endif
 <div>
        @foreach($categories as $category)
        <div class='category'>
            {{ $category->name }}
            <form method="POST" action="{{ route('categories.destroy', $category) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
        @endforeach
    </div>
    
</body>
</html>