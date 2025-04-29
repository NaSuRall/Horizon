@extends('layouts.dashboard')

@section('style')
    <link rel="stylesheet" href="{{asset('css/dashome.css')}}">
@endsection

@section('content')
    <div class="container">
        <div class="card div1">
            <div class="card-header">
                <h1>Voici toutes les marques</h1>
            </div>
            <div class="card-body">
                <table class="styled-table">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($marques as $marque)
                        <tr>
                            <td><p>{{ $marque->name }}</p></td>
                            <td><p>...</p></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card div2">
            <div class="card-header">
                <h1>Voici toutes les marques</h1>
            </div>
            <div class="card-body">
                <table class="styled-table">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($marques as $marque)
                        <tr>
                            <td><p>{{ $marque->name }}</p></td>
                            <td><p>...</p></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card div3">
            <div class="card-header">
                <h1>Voici toutes les marques</h1>
            </div>
            <div class="card-body">
                <table class="styled-table">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($marques as $marque)
                        <tr>
                            <td><p>{{ $marque->name }}</p></td>
                            <td><p>...</p></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card div4">
            <div class="card-header">
                <h1>Voici toutes les marques</h1>
            </div>
            <div class="card-body">
                <table class="styled-table">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($marques as $marque)
                        <tr>
                            <td><p>{{ $marque->name }}</p></td>
                            <td><p>...</p></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
