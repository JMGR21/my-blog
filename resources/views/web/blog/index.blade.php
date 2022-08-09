@extends('web.layout')

@section('content')
    <x-web.blog.navigation />

    <x-web.blog.post.index :posts="$posts">
        Listado principal de Posts
    </x-web.blog.post.index>

    <x-web.blog.footer />
@endsection
