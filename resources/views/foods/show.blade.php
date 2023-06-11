@extends('layouts.app')

@section('content')
    <h1>Food Details</h1>
    <table class="table">
        <tbody>
            <tr>
                <th>Name</th>
                <td>{{ $food->name }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ $food->price }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $food->description }}</td>
            </tr>
        </tbody>
    </table>
@endsection
