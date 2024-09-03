@extends('layouts.principal')

@section('title', 'Show Category')

@section('content')

<div class="col-md-12">
    <div class="h-100 p-5 bg-light border rounded-3">
        <h2>{{ $category->name }}</h2>
        <p>{{ $category->description }}</p>
        <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary" type="button">Voltar</a>
    </div>
</div>

@endsection