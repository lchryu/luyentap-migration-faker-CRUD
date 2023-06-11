@extends('layouts.app')

@section('content')
    <h1>Foods</h1>
    <a href="{{ route('foods.create') }}" class="btn btn-primary mb-2">Add Food</a>
    @if ($foods->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($foods as $food)
                    <tr>
                        <td>{{ $food->name }}</td>
                        <td>{{ $food->price }}</td>
                        <td>{{ $food->description }}</td>
                        <td>
                            <a href="{{ route('foods.show', $food->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('foods.edit', $food->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('foods.destroy', $food->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this food?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No foods found.</p>
    @endif
@endsection
