@extends('layouts.principal')

@section('title', 'Show Supplier')

@section('content')

<div class="col-md-12">
    <div class="h-100 p-5 bg-light border rounded-3">
        <h2>{{ $supplier->name }}</h2>
        <p>{{ $supplier->email }}</p>
        <a href="{{ route('suppliers.index') }}" class="btn btn-outline-secondary" type="button">Voltar</a>
    </div>
</div>

@endsection