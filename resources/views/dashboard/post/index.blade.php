@extends('dashboard.layout')

@section('content')
    <div class="min-h-screen py-5">
        <div class="mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg">
            <a href="{{ route("post.create") }}" class="items-center px-4 py-2 bg-green-600 hover:bg-green-700 text-white text-sm font-medium rounded-md">
                New Post
            </a>
        </div>

        <div class='overflow-x-auto w-full mt-6'>
            <table class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                <thead class="bg-gray-900">
                    <tr class="text-white text-left">
                        <th class="font-semibold text-sm uppercase px-6 py-4"> Title </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4"> Category </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Posted </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4"> </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($posts as $post)
                        <tr>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div>
                                        <p> {{ $post->title }} </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <p class=""> {{ $post->category->title }} </p>
                            </td>
                            <td class="px-6 py-4 text-center"> 
                                @if ($post->posted  == 'yes')
                                    <span class="text-white text-sm w-1/3 pb-1 bg-green-600 font-semibold px-2 rounded-full"> Active </span>
                                @else
                                    <span class="text-white text-sm w-1/3 pb-1 bg-red-600 font-semibold px-2 rounded-full"> Inactive </span>
                                @endif 
                            </td>
                            <td class="text-center"> 
                                <div class="grid grid-cols-3 gap-4 content-end">
                                    <a href="{{ route("post.edit", $post->id) }}" class="inline-flex items-center px-4 py-2 bg-green-600 hover:bg-green-700 text-white text-sm font-medium rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill h-5 w-5 mr-2" viewBox="0 0 16 16">
                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                        </svg>

                                        Edit
                                    </a>
                                
                                    <a href="{{ route("post.show", $post->id) }}" class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill h-5 w-5 mr-2" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg>
                                        
                                        Show
                                    </a>

                                    <form action="{{ route("post.destroy", $post->id) }}" method="POST">
                                        @method("DELETE")
                                        @csrf

                                        <button class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mx-auto max-w-4xl w-full whitespace-nowrap mt-6">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection