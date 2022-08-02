@extends('dashboard.layout')

@section('content')
    <a href="{{ route("category.create") }}">New Category</a>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->title }}</td>
                    <td>
                        <a href="{{ route("category.edit", $category->id) }}">Edit</a>
                        <a href="{{ route("category.show", $category->id) }}">Show</a>

                        <form action="{{ route("category.destroy", $category->id) }}" method="POST">
                            @method("DELETE")
                            @csrf

                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection