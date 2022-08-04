@extends('dashboard.layout')

@section('content')
    @include('dashboard.fragment.errors-form')

    <div class="heading mx-auto max-w-2xl font-bold text-2xl m-5 text-gray-800">Edit Post</div>

    <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="pb-8">
        @method("PATCH")
        
        @include('dashboard.post.form', ["task" => "edit"])
    </form>
@endsection