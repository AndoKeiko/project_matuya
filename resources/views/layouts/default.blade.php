<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', '松屋お食事') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <link href="{{asset('/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('/css/app.css')}}" rel="stylesheet">
  {{-- @vite('resources/css/app.css') --}}
  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>

<body class="font-sans antialiased body">
  <div class="min-h-screen dark:bg-gray-900">
    <!-- Page Heading -->
    @include('layouts.header')
    <header name="header" class="bg-gray-100">
      <div class="max-w-7xl mx-auto py-6 px-2 sm:px-4 lg:px-4 w-full flex justify-between">
        <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex justify-between w-full">
          <a href="{{ route('menu.index', ['category_id' => 2]) }}" class="flex text-center">おすすめ</a>
          <a href="{{ route('menu.index', ['category_id' => 1]) }}" class="flex text-center">牛めし</a>
          <a href="{{ route('menu.index', ['category_id' => 3]) }}" class="flex text-center">カレー</a>
          <a href="{{ route('menu.index', ['category_id' => 4]) }}" class="flex text-center">丼</a>
          <a href="{{ route('menu.index', ['category_id' => 5]) }}" class="flex text-center">定食</a>
          <a href="{{ route('menu.index', ['category_id' => 6]) }}" class="flex text-center">サイドメニュー</a>
          <a href="{{ route('menu.index', ['category_id' => 7]) }}" class="flex text-center">ドリンク</a>
          <a href="{{ route('menu.index', ['category_id' => 8]) }}" class="flex text-center">お子様</a>
        </div>
      </div>
    </header>
    <!-- Page Content -->
    <main class="main">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @yield('content')
      </div>
    </main>
    @php
        $excludedPaths = ['payment','receipt'];
    @endphp

    @if (!in_array(Request::segment(1), $excludedPaths))
        @include('layouts.footer')
    @endif
  </div>
  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>