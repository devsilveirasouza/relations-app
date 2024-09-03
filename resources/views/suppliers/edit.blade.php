@extends('layouts.principal')

@section('title', 'Edit Supplier')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">Gestão de Fornecedores</div>
                <div class="card-body">
                    <div class="container mt-5">
                        <h1 class="mb-4">Atualizar Fornecedor</h1>
                        
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('suppliers.update', $supplier) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" value="{{ $supplier->name }}" class="form-control" id="name" name="name" required>
                            </div>          

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" value="{{ $supplier->email }}" class="form-control" id="email" name="email" required>  
                            </div>

                            <button type="submit" class="btn btn-primary mt-3" onclick="return confirm('Você têm certeza que quer atualizar este fornecedor?')">Atualizar</button>
                            <a href="{{ route('suppliers.index') }}" class="btn btn-secondary mt-3">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection