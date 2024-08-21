<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="my-2">

    <form action="{{ route('posts.index') }}" method="GET" class="max-w-md mx-auto">   
  <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
  <div class="relative">
      <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
      </div>
      <input 
          type="search" 
          id="default-search" 
          name="search" 
          value="{{ request('search') }}" 
          class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
          placeholder="Cari Artikel, Tag..." 
          hx-get="{{ route('posts.index') }}" 
          hx-trigger="keyup" 
          hx-target="#posts-container" 
          hx-push-url="true"
      />
      <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
  </div>
</form>

<div id="posts-container">
    <div class="mt-8">
        {{ $posts->links() }}
    </div>
    
    <div class="container mx-auto px-4 py-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      @forelse ($posts as $post)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="relative">
            <div class="animate-pulse bg-gray-300 h-48 rounded-t-lg flex items-center justify-center">
              <span class="text-gray-600 font-bold text-xl">LOADING CUYY...</span>
            </div>
            <img class="rounded-t-lg w-full h-48 object-cover absolute top-0 left-0" 
                 src="https://picsum.photos/seed/{{ urlencode($post['title']) }}/920/613" 
                 alt="{{ $post['title'] }}"
                 onload="this.style.opacity='1'"
                 style="opacity: 0; transition: opacity 0.3s ease-in-out;">
          </div>
          <div class="p-5">
            <a href="/posts/{{ $post['slug'] }}">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post['title'] }}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ Str::limit($post['body'], 100) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Read more
              <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
              </svg>
            </a>
            <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
            <div class="flex justify-start gap-2 flex-wrap p-4">
              <span class="bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-600">Test</span>
          </div>
            <div class="mt-4 flex items-center">
              <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name={{ urlencode($post['author']) }}&background=random" 
                alt="{{ $post['author'] }}">
              </div>
              <div class="ml-3">
                <p class="text-sm font-medium text-gray-900 dark:text-gray-200">{{ $post['author'] }}</p>
                <p class="text-sm text-gray-500 dark:text-gray-400">{{ $post['published_at'] }}</p>
              </div>
            </div>
          </div>
        </div>
      @empty
        <p class="text-center text-gray-600 dark:text-gray-400">Tidak ada hasil yang ditemukan.</p>
      @endforelse
    </div>
    
    <div class="mt-8">
        {{ $posts->links() }}
    </div>
  </div>
</x-layout>
