<x-layout>
  <x-slot:nama>{{ $tilte }}</x-slot:nama>

  <article class="py-8 max-w-screen-md border-b border-gray-300">
    <h2 class=" mb-1 text-3xl tracking-tighter font-bold text-gray-900">{{ $post['title'] }}</h2>
    <div class=" text-base font-medium text-gray-500">
      <a href="#">{{ $post['author'] }} | 13 Agustus 2024</a>
    </div>
    <p class=" py-4 font-light">{{ $post['body'] }}</p>
      <a href="/posts/" class=" font-medium text-blue-500 hover:underline">back to Post &laquo;</a>
  </article>

</x-layout>