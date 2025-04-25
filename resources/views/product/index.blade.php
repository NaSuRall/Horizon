@extends('layouts.shop')

@section('content')

        @foreach($products as $product)
            <ul>
                <li>{{ $product->name }} - {{ $product->description }}</li>
            </ul>
        @endforeach
@endsection
