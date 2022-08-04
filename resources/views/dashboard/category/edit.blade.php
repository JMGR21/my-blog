@extends('dashboard.layout')

@section('content')
    @include('dashboard.fragment.errors-form')

    <div class="heading mx-auto max-w-2xl font-bold text-2xl m-5 text-gray-800">Edit Category</div>

    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @method("PATCH")
        
        @include('dashboard.category.form', ["task" => "edit"])
    </form>
@endsection