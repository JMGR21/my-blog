<div class="max-w-6xl px-6 py-8 mx-auto space-y-12">
  <article class="space-y-8 text-gray-900">
      <div class="space-y-6">
          <h1 class="text-4xl font-bold md:tracking-tight md:text-5xl">{{ $post->title }}</h1>
      </div>

      <div class="flex flex-wrap">
        <a rel="noopener noreferrer" href="#" class="px-3 py-1 rounded-sm hover:underline bg-violet-400 text-white">
            {{ $post->category->title }}
        </a>
      </div>

      @isset($post->image)
        <img src="{{ asset("image/" . $post->image) }}" class="w-full object-cover lg:rounded" style="height: 28em;"/>
      @endisset

      <div class="text-gray-900">
          <h2 class="text-2xl font-bold">Description</h2>
          <p>{{ $post->description }}</p>
          
          <br>

          <h2 class="text-2xl font-bold">Content</h2>
          <p>{{ $post->content }}</p>
      </div>
  </article>
  <div class="border-t border-dashed py-6 space-x-2 border-gray-400">
      <div class="space-y-2">
          <h4 class="text-lg font-semibold">Related posts</h4>
          <ul class="ml-4 space-y-1 list-disc">
              @foreach ($posts as $post) 
                  <li>
                      <a rel="noopener noreferrer" href="{{ route("web.blog.show", $post->id) }}" class="hover:underline">{{ $post->title }}</a>
                  </li>
              @endforeach
          </ul>
      </div>
  </div>
</div>