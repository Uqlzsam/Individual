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
    <h1>Customers</h1>
    <a href="{{ route('customers.index') }}" class="btn btn-primary">Add Customer</a>

    <ul>
        @foreach($customers as $customer)
            <li>
                <strong>{{ $customer->name }}</strong> 
                ({{ $customer->email }}) - 
                Products: {{ $customer->products->count() }}
                <a href="{{ route('customers.show', $customer->id) }}">View</a>
            </li>
        @endforeach
    </ul>
@endsection

</body>
</html>