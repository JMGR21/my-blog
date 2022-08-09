@extends('web.layout')

@section('content')
    <x-web.blog.navigation />

    <x-web.blog.post.show :post="$post" />

    <x-web.blog.footer />
@endsection
