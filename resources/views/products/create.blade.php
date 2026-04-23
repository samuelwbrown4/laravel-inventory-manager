<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h1>Add Product</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf

        <label>Name</label>
        <input type="text" name="name">
        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <label>Description</label>
        <textarea name="description"></textarea>
        @error('description')
            <p>{{ $message }}</p>
        @enderror

        <label>Price</label>
        <input type="number" step="0.01" name="price">
        @error('price')
            <p>{{ $message }}</p>
        @enderror

        <label>Quantity</label>
        <input type="number" name="quantity">
        @error('quantity')
            <p>{{ $message }}</p>
        @enderror

        <label>Category</label>
        <select name="category_id">
            <option value="">Select a category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Save</button>
    </form>

    <a href="{{ route('products.index') }}">Back</a>
</body>
</html>