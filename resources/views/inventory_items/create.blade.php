@extends('layouts.app')

@section('content')
    <h1>Add New Inventory Item</h1>

    <form action="{{ route('inventory_items.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id" class="form-select">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="unit" class="form-label">Unit</label>
            <input type="text" name="unit" id="unit" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="last_restocked" class="form-label">Last Restocked</label>
            <input type="date" name="last_restocked" id="last_restocked" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save Item</button>
        <a href="{{ route('inventory_items.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection