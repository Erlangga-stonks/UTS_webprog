@extends('first_page.main')

@section('Allthings')

<div class="max-w-sm rounded overflow-hidden shadow-lg">
  <img class="w-full" src="/images/{{ $check2->image }}" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="font-bold text-l mb-2">Title:</div>
    <a>{{ $check2->title }}</a>
    <br>
    <div class="font-bold text-l mb-2">Author:</div>
    <a href="">{{ $check2->author }}</a>
    <br>
    <div class="font-bold text-l mb-2">publisher:</div>
    <a href="">{{ $check2->publisher }}</a>
    <br>
    <div class="font-bold text-l mb-2">Year:</div>
    <a href="">{{ $check2->year }}</a>
    <br>
    <div class="font-bold text-l mb-2">Synopsis:</div>
    <p class="text-gray-700 text-base">
      {{ $check2->synopsis }}
    </p>
  </div>
</div>
@endsection