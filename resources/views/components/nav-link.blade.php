<a href="/{{ $to }}" class="rounded-md px-3 py-2 text-sm font-medium 
@if (request()->is(($to)))
    bg-gray-900 text-white 
@else
    text-gray-300 hover:bg-gray-700 hover:text-white
@endif" 
aria-current="{{ $to }}">{{ $slot }}</a>
