@extends('first_page.main')


@section('Allthings')
<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <div class="px-6 py-4">
      <div class="text-l mb-2">Publisher Name    : {{ $check1->name }}</div>
      <div class="text-l mb-2">Publisher address : {{ $check1->address }}</div>
      <div class="text-l mb-2">Publisher phone   : {{ $check1->phone }}</div>
      <div class="text-l mb-2">Publisher email   : {{ $check1->email }}</div>
    </div>
    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
      <div class="rounded overflow-hidden shadow-lg">
        <img class="w-full" src="images/{{ $post->image }} " alt="allpict">
        <div class="px-6 py-4">
          <a class="text-3xl">Book Title</a>
          <div class="font-bold text-xl mb-2">{{ $post->title }}</div>
          <a class="text-s">by</a>
          <br>
          <a class="text-xl">{{ $post->author }}</a>
        </div>
        <button type="button" onclick="location.href='/homepage/Timun Mas'" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Detail</button>
      </div>
@endsection