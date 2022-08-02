@extends('dashboard.layout')

@section('content')
    <h1>Editar Post</h1>
    
    @include('dashboard.fragment.errors-form')

    <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @method("PATCH")
        
        @include('dashboard.post.form', ["task" => "edit"])
    </form>
@endsection