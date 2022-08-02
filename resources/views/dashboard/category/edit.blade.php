@extends('dashboard.layout')

@section('content')
    <h1>Editar Categoria</h1>
    
    @include('dashboard.fragment.errors-form')

    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @method("PATCH")
        
        @include('dashboard.category.form')
    </form>
@endsection