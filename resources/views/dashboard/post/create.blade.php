@extends('dashboard.layout')

@section('content')
    @include('dashboard.fragment.errors-form')

    <div class="heading mx-auto max-w-2xl font-bold text-2xl m-5 text-gray-800">New Post</div>

    <form action="{{ route('post.store') }}" method="POST" class="pb-8">
        @include('dashboard.post.form')
    </form>
@endsection