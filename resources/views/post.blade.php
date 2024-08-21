<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <article class="py-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <header class="mb-12">
            <div class="relative">
                <div class="animate-pulse bg-gray-300 h-80 rounded-t-lg flex items-center justify-center">
                    <span class="text-gray-600 font-bold text-xl">LOADING CUYY...</span>
                </div>
                <img class="w-full h-80 object-cover rounded-xl shadow-lg mb-8 absolute top-0 left-0" 
                     src="https://picsum.photos/seed/{{ urlencode($post['title']) }}/920/613" 
                     alt="{{ $post['title'] }}"
                     onload="this.style.opacity='1'"
                     style="opacity: 0; transition: opacity 0.3s ease-in-out;">
            </div>
            <h1 class="text-5xl font-extrabold text-gray-900 tracking-tight my-4 leading-tight">
                {{ $post['title'] }}
            </h1>
            <div class="flex items-center text-gray-600 border-b border-gray-400 pb-4">
                <img src="https://ui-avatars.com/api/?name={{ urlencode($post['author']) }}&background=random" alt="{{ $post['author'] }}" class="w-12 h-12 rounded-full mr-4 border-2 border-blue-500">
                <div>
                    <span class="font-semibold text-gray-800 block">{{ $post['author'] }}</span>
                    <time datetime="{{ $post['published_at'] }} " class="text-sm">{{ $post['published_at'] }}</time>
                </div>
            </div>
        </header>
        
        <div class="prose prose-lg text-gray-700 max-w-none">
            <p class="text-xl text-gray-600 mb-8 font-light leading-relaxed">
                {{ Str::limit($post['body'], 200) }}
            </p>
            <div class="mt-6">
                {{ $post['body'] }}
            </div>
        </div>
        
        <footer class="mt-16">
            <a href="/posts/" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition-colors duration-300 ease-in-out">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Posts
            </a>
        </footer>
    </article>
</x-layout>