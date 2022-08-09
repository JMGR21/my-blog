<div class="border-b bg-indigo-500 py-4">
  <header class="max-w-7xl mx-auto flex items-center justify-between">
    <!--Logo-->
    <a href="{{ route("web.blog.index") }}" class="px-2 lg:px-0 uppercase font-bold text-white">My Blog</a>

    <!-- Navigation -->
    <ul class="inline-flex items-center">
      <li class="px-2 md:px-4">
        <a href="{{ route("web.blog.index") }}" class="text-white font-semibold hover:text-rose-300 hover:font-bold"> Home </a>
      </li>
      <li class="px-2 md:px-4">
        <a href="#" class="text-white font-semibold hover:text-rose-300 hover:font-bold"> About </a>
      </li>
      <li class="px-2 md:px-4">
        <a href="#" class="text-white font-semibold hover:text-rose-300 hover:font-bold"> Contact </a>
      </li>
      @auth
      <li class="px-2 md:px-4 md:block">
        <a href="{{ route("dashboard") }}" class="text-white font-semibold hover:text-rose-300 hover:font-bold"> Dashboard </a>
      </li> 
      @else
      <li class="px-2 md:px-4 md:block">
        <a href="{{ route("login") }}" class="text-white font-semibold hover:text-rose-300 hover:font-bold"> Login </a>
      </li>
      <li class="px-2 md:px-4 md:block">
        <a href="{{ route("register") }}" class="text-white font-semibold hover:text-rose-300 hover:font-bold"> Register </a>
      </li>
      @endauth
    </ul>
  </header>
</div>