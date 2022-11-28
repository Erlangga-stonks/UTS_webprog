<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="https://e1.pngegg.com/pngimages/380/931/png-clipart-manga-folder-icon-ico-manga-folder-icon-bakuman-thumbnail.png">
    <title>{{ config('app.name','DBS') }}</title>
    
</head>
<body>
      @include('Navbar.navbar')
      <a>{{ $page_container }}</a>
       @yield('categ')
       <div class="flex flex justify-between px-5 py-5">    
         @yield('Allthings')
       </div>
      @include('Footer.footer')
</body>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</html>