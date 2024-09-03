@extends('layouts.principal')

@section('title', '<i class="ri-user-5-line"></i> Users')

@section('content')

<div class="col-md-12">
    <div class="h-100 p-5 bg-light border rounded-3">
        <h2>{{ $user->name }}</h2>
        <p>{{ $user->email }}</p>
        <a href="{{ route('users.index') }}" class="btn btn-outline-secondary" type="button">Voltar</a>
    </div>
</div>

@endsection