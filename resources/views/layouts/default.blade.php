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

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>

<body class="font-sans antialiased body">
  <div class="min-h-screen dark:bg-gray-900">
    <!-- Page Heading -->
    @include('layouts.header')     

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