@extends('layouts.principal')

@section('title', 'Home')

@section('content')

<div class="container">

    <div class="row justify-content-center mt-5 mb-5 text-center">
        <div class="card bg-dark col-md-12">
            <div class="card-header text-white">
                <h3 class="card-title">SERVICE CAR SYSTEM</h3>
            </div>

            <div class="card-body">
                <p class="card-text text-white">
                    Acesse as seguintes páginas:
                </p>
                <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm text-white">Usuários</a>
                <a href="{{ route('suppliers.index') }}" class="btn btn-primary btn-sm text-white">Fornecedores</a>
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm text-white">Produtos</a>
                <a href="{{ route('categories.index') }}" class="btn btn-primary btn-sm text-white">Categorias</a>
            </div>
        </div>

        <div class="card text-bg-dark">
            <img src="{{ asset('img/bg-oficina.png') }}" class="card-img" alt="Oficina Mecânica">
            <div class="card-img-overlay">

                <h2 class="card-title">GESTÃO DE ORDENS DE SERVIÇOS</h2>

                <div class="card-body">
                    <div class="row">
                        <div class="card text-bg-secondary col-md-4">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small>Last updated 3 mins ago</small></p>
                        </div>
                        <div class="card text-bg-secondary col-md-4">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small>Last updated 3 mins ago</small></p>
                        </div>
                        <div class="card text-bg-secondary col-md-4">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small>Last updated 3 mins ago</small></p>
                        </div>
                    </div>



                </div>

            </div>

        </div>
    </div>

    @endsection