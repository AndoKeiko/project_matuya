<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <link href="{{asset('/css/style.css')}}" rel="stylesheet">
  @vite('resources/css/app.css')
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
    <footer class="bg-gray-200 flex justify-between w-full footer">
      <div class="max-w-7xl mx-auto py-6 px-2 sm:px-4 lg:px-4 w-full flex justify-between">
        <div class="left_wrap w-8/12">
          <div class="left-up h-52" id="left-up">

          </div>
          <div class="left-bottom">
            <div class="left-bottom-bar bg-slate-900 p-2 text-white"><span>10000</span><span>5000</span><span>5000</span><span>1000</span><span>クレジットカード</span><span>電子マネー</span></div>
            <ul class="left-bottom-list">
              <li class="left-bottom-list-item">
                <p class="amount_title">お預かり</p>
                <p class="amount_price">￥0</p>
              </li>
              <li class="left-bottom-list-item">
                <p class="amount_title">商品合計</p>
                <p class="amount_price" id="total_price">￥0</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="right_wrap w-4/12 flex flex-col sm:px-6 lg:px-8">
          <a class="w-full text-center text-2xl items-center btn-zan bg-lime-400 mb-2.5 font-bold">電子マネー残高照会</a>
          <a class="w-full text-center text-2xl items-center btn-all-can bg-slate-900 text-white mb-2.5 font-bold">すべてキャンセル</a>
          <a class="w-full text-center text-2xl items-center btn-amount bg-red-600 leading-10 font-bold">お会計</a>
        </div>
      </div>
    </footer>
  </div>
  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>