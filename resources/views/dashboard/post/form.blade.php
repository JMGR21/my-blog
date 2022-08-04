@csrf
<div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
    <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="Title" type="text" name="title" id="title" value="{{ old("title", $post->title) }}">
    <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="Slug" type="text" name="slug" id="slug" value="{{ old("slug", $post->slug) }}" hidden>
    <select name="category_id" id="category_id" class="bg-gray-100 border border-gray-300 p-2 mb-4 outline-none">
        <option value="null">Select an option</option>
        @foreach ($categories as $title => $id)
            <option {{ old("category_id", $post->category_id) == $id ? "selected" : "" }} value="{{ $id }}">{{ $title }}</option>
        @endforeach
    </select>

    <select name="posted" id="posted" class="bg-gray-100 border border-gray-300 p-2 mb-4 outline-none">
        <option value="yes" {{ old("posted", $post->posted) == "yes" ? "selected" : "" }}>Yes</option>
        <option value="not" {{ old("posted", $post->posted) == "not" ? "selected" : "" }}>No</option>
    </select>

    <textarea rows="4" class="block w-full text-sm bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none" placeholder="Write everything about this post here" name="content" id="content">
        {{ old("content", $post->content) }}
    </textarea>

    <!-- icons -->
    <div class="icons flex text-gray-500 m-2 mb-4">
        <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
        <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" /></svg>
        <div class="count ml-auto text-gray-400 text-xs font-semibold">0/300</div>
    </div>

    <textarea rows="4" class="block w-full text-sm bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none" placeholder="Describe everything about this post here" name="description" id="description">
        {{ old("description", $post->description) }}
    </textarea>

    <!-- icons -->
    <div class="icons flex text-gray-500 m-2 mb-4">
        <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
        <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" /></svg>
        <div class="count ml-auto text-gray-400 text-xs font-semibold">0/300</div>
    </div>

    @if (isset($task) && $task == "edit")
        <fieldset class=" space-y-1 text-gray-100">
            <label for="image" class="block text-sm font-medium text-gray-800">Image</label>
            <div class="">
                <input type="file" name="image" id="image" class="px-8 py-12 w-full border-2 border-dashed rounded-md mb-4 border-gray-300 text-gray-400 bg-gray-100">
            </div>
        </fieldset>
    @endif

    <!-- buttons -->
    <div class="buttons flex">
        <a href="{{ route("post.index") }}" class="btn border border-gray-300 p-1 px-4 font-semibold cursor-pointer text-gray-500 ml-auto">Cancel</a>
        <button class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500" type="submit">
            @if (isset($task) && $task == "edit")
                Save
            @else
                Post
            @endif
        </button>
    </div>
</div>