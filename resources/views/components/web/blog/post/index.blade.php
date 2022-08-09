<div>
  <div class="dark:bg-gray-800">
    <div class="container flex flex-col items-center px-4 py-16 pb-24 mx-auto text-center lg:pb-56 md:py-32 md:px-10 lg:px-32 dark:text-gray-900">
      <h1 class="text-5xl font-bold leading-none sm:text-6xl xl:max-w-3xl text-white">{{ $slot }}</h1>
      <p class="mt-6 mb-8 text-lg sm:mb-12 xl:max-w-3xl dark:text-gray-200">Cupiditate minima voluptate temporibus quia? Architecto beatae esse ab amet vero eaque explicabo!</p>
    </div>
  </div>

  <div class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg shadow-md lg:-mt-40 dark:bg-gray-700 p-5">
    @foreach ($posts as $post)
      <div class="container px-10 py-6 my-5 mx-auto rounded-lg shadow-sm dark:bg-gray-900 dark:text-gray-100">
        <div class="flex items-center justify-between">
          <span class="text-sm dark:text-gray-400">Jun 1, 2020</span>
          <a rel="noopener noreferrer" href="#" class="px-2 py-1 font-bold rounded dark:bg-violet-400 dark:text-gray-900">{{ $post->category->title }}</a>
        </div>
        <div class="mt-3">
          <a rel="noopener noreferrer" href="{{ route("web.blog.show", $post->id) }}" class="text-2xl font-bold hover:underline">{{ $post->title }}</a>
          <p class="mt-2">{{ $post->description }}</p>
        </div>
        <div class="flex items-center justify-between mt-4">
          <a rel="noopener noreferrer" href="{{ route("web.blog.show", $post->id) }}" class="hover:underline dark:text-violet-400">Read more</a>
        </div>
      </div>
    @endforeach
  </div>
</div>