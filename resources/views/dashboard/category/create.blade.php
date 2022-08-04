@extends('dashboard.layout')

@section('content')
    @include('dashboard.fragment.errors-form')

    <div class="heading mx-auto max-w-2xl font-bold text-2xl m-5 text-gray-800">New Category</div>

    <form action="{{ route('category.store') }}" method="POST">
        @include('dashboard.category.form')
    </form>
@endsection