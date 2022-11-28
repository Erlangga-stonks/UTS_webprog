@extends('first_page.main')

@section('categ')
<div class="max-w-sm rounded overflow-hidden shadow-lg">
  <img class="w-full" src="/images/{{ $image }}" alt="Komisan">
  <div class="px-6 py-4">
    <a class="text-3xl">Book Title</a>
    <br>
    <div class="font-bold text-xl mb-2">{{ $title }}</div>
    <a class="text-s">by</a>
    <br>
    <a class="text-3xl">{{ $author }}</a>
  </div>
  <div class="px-6 pt-4 pb-2">
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Folklore</span>
  </div>
</div>
@endsection