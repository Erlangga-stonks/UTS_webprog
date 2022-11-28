@extends('first_page.main')

@section('Allthings')
<div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
    <div class="rounded overflow-hidden shadow-lg">
        <img class="w-full" src="/images/{{ $image }}" alt="CeritaRakyat">
        <div class="px-6 py-4">
          <a class="text-3xl">Book Title</a>
          <div class="font-bold text-xl mb-2">{{ $title }}</div>
          <a class="text-s">by</a>
          <br>
          <a class="text-xl">{{ $author }}</a>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Folklore</span>
        </div>
         <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Detail</button>
      </div>
</div>
@endsection