<x-layout>
    <x-slot:nama>{{ $title }}</x-slot:title>
    
    <article class="py-12 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <header class="mb-8">
            <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight mb-2">
                {{ $post['title'] }}
            </h1>
            <div class="flex items-center text-gray-600">
                <img src="https://ui-avatars.com/api/?name={{ urlencode($post['author']) }}&background=random" alt="{{ $post['author'] }}" class="w-10 h-10 rounded-full mr-3">
                <span class="mr-3">{{ $post['author'] }}</span>
                <span>|</span>
                <time datetime="2024-08-13" class="ml-3">13 Agustus 2024</time>
            </div>
        </header>
        
        <div class="prose prose-lg text-gray-700 max-w-none">
            {{ $post['body'] }}
        </div>
        
        <footer class="mt-12">
            <a href="/posts/" class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors duration-200">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Posts
            </a>
        </footer>
    </article>
</x-layout>