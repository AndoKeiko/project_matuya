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
        
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">


            <!-- Page Heading -->
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">                    
                    @yield('header')
                    </div>
                </header>

            <!-- Page Content -->
            <main>
                  @yield('content')
            </main>
            <footer class="bg-gray-200 flex justify-between w-full">
              <div class="max-w-7xl mx-auto py-6 px-2 sm:px-4 lg:px-4 w-full flex justify-between">                    
                <div class="left_wrap w-8/12">
                  <div class="left-up h-52">
                  <dl class="item_list flex justify-between font-bold">
                    <dt class="w-8 flex items-center"><span class="bg-white rounded-full aspect-square size-8 flex items-center justify-center font-bold">―</span></dt>
                    <dd class="w-full flex justify-between"><span class="title">牛めし　小盛</span><span>￥1,080</span></dd>
                  </dl>
                  <dl class="item_list flex justify-between font-bold">
                  <dt class="w-8 flex items-center"><span class="bg-white rounded-full aspect-square size-8 flex items-center justify-center font-bold">―</span></dt>
                    <dd class="w-full flex justify-between"><span class="title">牛めし　小盛</span><span>￥1,080</span></dd>
                  </dl>
                  <dl class="item_list flex justify-between font-bold">
                  <dt class="w-8 flex items-center"><span class="bg-white rounded-full aspect-square size-8 flex items-center justify-center font-bold">―</span></dt>
                    <dd class="w-full flex justify-between"><span class="title">牛めし　小盛</span><span>￥1,080</span></dd>
                  </dl>
                  <dl class="item_list flex justify-between font-bold">
                    <dt class="w-8 flex items-center"><span class="bg-white rounded-full aspect-square size-8 flex items-center justify-center font-bold">―</span></dt>
                    <dd class="w-full flex justify-between"><span class="title">牛めし　小盛</span><span>￥1,080</span></dd>
                  </dl>
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
                      <p class="amount_price">￥1,100</p>
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
    </body>
</html>
