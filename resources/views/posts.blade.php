<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

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
    @endforeach
    </div>
    <div class="mt-8">
        {{ $posts->links() }}
    </div>
  </div>
</x-layout>