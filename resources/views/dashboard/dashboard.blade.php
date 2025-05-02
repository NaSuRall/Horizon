@extends('layouts.dashboard')

@section('style')
    <link rel="stylesheet" href="{{asset('css/dashome.css')}}">
@endsection

@section('content')
    <div class="container">
        <div class="card div1">
            <div class="card-header">
                <h1>Marques</h1>
                <a href="#"><i class="fa-solid fa-share"></i></a>
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
                <h1>Utilisateurs</h1>
                <a href="#"><i class="fa-solid fa-share"></i></a>
            </div>
            <div class="card-body">
                <table class="styled-table">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td><p>{{ $user->name }}</p></td>
                            <td><p>{{ $user->email }}</p></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card div3">
            <div class="card-header">
                <h1>Produits</h1>
                <a href="#"><i class="fa-solid fa-share"></i></a>
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
                    @foreach($products as $product)
                        <tr>
                            <td><p>{{ $product->name }}</p></td>
                            <td><p>...</p></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>


        <div class="card div4">
{{--            <div class="card-header">--}}
{{--                <h1>Users sur le site</h1>--}}
{{--            </div>--}}
{{--            <div class="card-body">--}}

{{--                <p>Nombre  {{ $onlineCount }} </p>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection
