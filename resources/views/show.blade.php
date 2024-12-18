<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <h1>{{ $customer->name }}</h1>
    <p>Email: {{ $customer->email }}</p>
    <p>Phone: {{ $customer->phone }}</p>

    <h2>Products</h2>
    <ul>
        @foreach($customer->products as $product)
            <li>
                {{ $product->name }} - ${{ $product->price }}
            </li>
        @endforeach
    </ul>
    <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back to List</a>
@endsection

</body>
</html>