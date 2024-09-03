@extends('layouts.principal')

@section('title', 'Home')

@section('content')

<div class="container">

    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">USERS</div>
                <div class="card-body">
                    <div class="container mt-5">
                        <h2 class="mb-4">Gestão de Usuários</h2>
                        <a href="{{ route('users.index') }}" class="btn btn-primary">Usuários</a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">CATEGORIAS</div>
                <div class="card-body">
                    <div class="container mt-5">
                        <h1 class="mb-4">Gestão de Categorias</h1>
                        <a href="{{ route('categories.index') }}" class="btn btn-primary">Categorias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">FORNECEDORES</div>
                <div class="card-body">
                    <div class="container mt-5">
                        <h1 class="mb-4">Gestão de Fornecedores</h1>
                        <a href="{{ route('suppliers.index') }}" class="btn btn-primary">Fornecedores</a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">PRODUTOS</div>
                <div class="card-body">
                    <div class="container mt-5">
                    <h1 class="mb-4">Gestão de Produtos</h1>
                    <a href="{{ route('home') }}" class="btn btn-primary">Produtos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection