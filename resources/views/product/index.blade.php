@extends('layouts.shop')

@section('content')



    <div class="container">
        @foreach($marques as $marque)
            <div class="bloc-marques">
                <div class="titre">
                    <h1>{{ $marque->name }}</h1>
                </div>
                <div class="bloc-body">
                    @foreach($products as $product)
                        <div class="card">
                            <div class="card-header">
                                <h2>{{ $product->name }}</h2>
                            </div>
                            <div class="card-body">
                                <p>  {{ $product->description }}</p>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

@endsection
