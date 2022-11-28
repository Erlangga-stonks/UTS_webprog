@extends('first_page.main')

@section('Allthings')

    @foreach ($homepage as $post)
      <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src="/images/{{ $post->image }}" alt="Komisan">
        <div class="px-6 py-4">
          <a class="text-3xl">Book Title</a>
          <br>
          <div class="font-bold text-xl mb-2">{{ $post->title }}</div>
          <a class="text-s">by</a>
          <br>
          <a class="text-3xl">{{ $post->author }}</a>
        </div>
        <div class="px-6 pt-4 pb-2">
          <button type="button" onclick="location.href='/homepage/{{ $post->id }}'" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Detail</button>
        </div>
      </div>
    @endforeach
@endsection
