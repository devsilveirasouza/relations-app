@extends('layouts.principal')

@section('title', 'Edit Category')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="p-1">
            <div class="card">
                <div class="card-header mt-4 text-center bg-dark text-white">Gestão de Categorias</div>
                <div class="card-body">
                    <div class="container mt-5">
                        <h1 class="mb-4">Atualizar Categoria</h1>
                        
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('categories.update', $category) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" value="{{ $category->name }}" class="form-control" id="name" name="name" required>
                            </div>          

                            <div class="form-group">
                                <label for="description">Description:</label>
                                <input type="description" value="{{ $category->description }}" class="form-control" id="description" name="description" required>  
                            </div>

                            <button type="submit" class="btn btn-primary mt-3" onclick="return confirm('Você têm certeza que quer atualizar esta categoria?')">Atualizar</button>
                            <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-3">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection