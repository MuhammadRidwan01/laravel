<x-layout>
  <x-slot:nama>{{ $tilte }}</x-slot:nama>

  
  <div class="container mx-auto px-4 py-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($posts as $post)
    <article>
      <a href="/posts/{{ $post['slug'] }}" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $post['title'] }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">{{ Str::limit($post['body'], 100) }}</p>
        <div class="mt-4 flex items-center">
          <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name={{ urlencode($post['author']) }}&background=random" alt="{{ $post['author'] }}">
          </div>
          <div class="ml-3">
            <p class="text-sm font-medium text-gray-900 ">{{ $post['author'] }}</p>
            <p class="text-sm text-gray-500 dark:text-gray-400">13 Agustus 2024</p>
          </div>
        </div>
      </a>
    </article>
    @endforeach
  </div>

</x-layout>