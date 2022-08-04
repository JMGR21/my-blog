@csrf
<div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
    <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="Title" type="text" name="title" id="title" value="{{ old("title", $category->title) }}">
    <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="Slug" type="text" name="slug" id="slug" value="{{ old("slug", $category->slug) }}" hidden>

    <!-- buttons -->
    <div class="buttons flex">
        <a href="{{ route("category.index") }}" class="btn border border-gray-300 p-1 px-4 font-semibold cursor-pointer text-gray-500 ml-auto">Cancel</a>
        <button class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500" type="submit">
            @if (isset($task) && $task == "edit")
                Save
            @else
                Add
            @endif
        </button>
    </div>
</div>