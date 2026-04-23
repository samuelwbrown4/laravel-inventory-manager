<!DOCTYPE html>
<html>
<head>
    <title>Add Category</title>
</head>
<body>
    <h1>Add Category</h1>

    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <label>Name</label>
        <input type="text" name="name">

        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Save</button>
    </form>

    <a href="{{ route('categories.index') }}">Back</a>
</body>
</html>