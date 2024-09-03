@extends('layouts.principal')

@section('title', 'Create Category')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">Gestão de Categorias</div>
                <div class="card-body">
                    <div class="container mt-5">

                        <h1 class="mb-4">Cadastrar Categoria</h1>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">Nome:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Descrição:</label>
                                <input type="description" class="form-control" id="description" name="description" required>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Criar</button>
                            <button type="reset" class="btn btn-secondary mt-3">Limpar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection