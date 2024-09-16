@extends('layouts.principal')

@section('title', 'Create User')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">Gestão de Usuários</div>
                <div class="card-body">
                    <div class="container mt-5">

                        <h1 class="mb-4">Cadastrar Usuários</h1>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">Nome:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>

                            <div class="form-group">
                                <label for="userType">Tipo de Usuário</label>
                                <select name="role" required>
                                    <option value="user" selected>Usuário</option>
                                    <option value="admin" >Administrador</option>
                                </select>
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