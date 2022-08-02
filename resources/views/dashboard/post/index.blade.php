@extends('dashboard.layout')

@section('content')
    <a href="{{ route("post.create") }}">New Post</a>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Posted</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->title }}</td>
                    <td>{{ $post->posted }}</td>
                    <td>
                        <a href="{{ route("post.edit", $post->id) }}">Edit</a>
                        <a href="{{ route("post.show", $post->id) }}">Show</a>

                        <form action="{{ route("post.destroy", $post->id) }}" method="POST">
                            @method("DELETE")
                            @csrf

                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
@endsection