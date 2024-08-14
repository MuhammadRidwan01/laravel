<x-layout>
  <x-slot:nama>{{ $tilte }}</x-slot:nama>

  @foreach ($posts as $post)
  <article class="py-8 max-w-screen-md border-b border-gray-300">
    <a href="/posts/{{ $post['slug'] }}">
      <h2 class=" mb-1 text-3xl tracking-tighter font-bold text-gray-900">{{ $post['title'] }}</h2>
    </a>
    <div class=" text-base font-medium text-gray-500">
      <a href="#">{{ $post['author'] }} | 13 Agustus 2024</a>
    </div>
    <p class=" py-4 font-light">{{ Str::limit($post['body'],150) }}</p>
      <a href="/posts/{{ $post['slug'] }}" class=" font-medium text-blue-500 hover:underline">Read more &raquo;</a>
  </article>
  @endforeach
</x-layout>