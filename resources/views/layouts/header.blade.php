<header name="header" class="bg-white dark:bg-gray-800 bg-yellow-100">
  <!-- Primary Navigation Menu -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-yellow-100">
    <div class="flex justify-between h-16">
      <div class="flex">
        <!-- Logo -->
        <div class="shrink-0 flex items-center">
          <a href="{{ route('index')}}">
            <img src="{{asset('storage/img_logo.svg')}}" width="80" height="37">
          </a>
        </div>
      </div>
    </div>
  </div>
  <nav class="border-b border-gray-100 dark:border-gray-700 bg-gray-100">
    <div class="max-w-7xl mx-auto py-6 px-2 sm:px-4 lg:px-4 w-full flex justify-between">
      <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex justify-between w-full nav-header">
        <input type="hidden" id="serveType_head" name="serveType_head">
        <a href="#" id="menu_recommendation" class="inline-flex"><img src="{{asset('storage/image/img_food1-8.png')}}" width="15" height="" class="header_img" alt="おすすめ">おすすめ</a>
        <a href="#" id="menu_beef" class="inline-flex"><img src="{{asset('storage/image/img_food5-8.png')}}" width="30" height="" class="header_img" alt="牛めし">牛めし</a>
        <a href="#" id="menu_curry" class="inline-flex"><img src="{{asset('storage/image/img_food4-8.png')}}" width="30" height="" class="header_img" alt="カレー">カレー</a>
        <a href="#" id="menu_bowl" class="inline-flex"><img src="{{asset('storage/image/img_food3-8.png')}}" width="30" height="" class="header_img" alt="丼">丼</a>
        <a href="#" id="menu_setmeal" class="inline-flex"><img src="{{asset('storage/image/img_food6-8.png')}}" width="30" height="" class="header_img" alt="定食">定食</a>
        <a href="#" id="menu_side" class="inline-flex"><img src="{{asset('storage/image/img_food2-8.png')}}" width="30" height="" class="header_img" alt="サイドメニュー">サイドメニュー</a>
        <a href="#" id="menu_drink" class="inline-flex"><img src="{{asset('storage/image/img_food7-8.png')}}" width="15" height="" class="header_img" alt="ドリンク">ドリンク</a>
        <a href="#" id="menu_kids" class="inline-flex"><img src="{{asset('storage/image/img_food8-8.png')}}" width="30" height="" class="header_img" alt="お子様">お子様</a>
      </div>
    </div>
  </nav>
</header>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    let serveId = (!sessionStorage.getItem('serve_id')) ? 1:sessionStorage.getItem('serve_id');
    // serveId = $("#serveType_head").value;
    // document.getElementById('serveType_head').value = serveId;
    // serveId = $("#serveType_head").value;

    var menuLinks = {
      recommendation: "{{ route('menu.index', ['category_id' => 2, 'serve_id' => ':serveId']) }}".replace(':serveId', serveId),
        beef: "{{ route('menu.index', ['category_id' => 1, 'serve_id' => ':serveId']) }}".replace(':serveId', serveId),
        curry: "{{ route('menu.index', ['category_id' => 3, 'serve_id' => ':serveId']) }}".replace(':serveId', serveId),
        bowl: "{{ route('menu.index', ['category_id' => 4, 'serve_id' => ':serveId']) }}".replace(':serveId', serveId),
        setmeal: "{{ route('menu.index', ['category_id' => 5, 'serve_id' => ':serveId']) }}".replace(':serveId', serveId),
        side: "{{ route('menu.index', ['category_id' => 6, 'serve_id' => ':serveId']) }}".replace(':serveId', serveId),
        drink: "{{ route('menu.index', ['category_id' => 7, 'serve_id' => ':serveId']) }}".replace(':serveId', serveId),
        kids: "{{ route('menu.index', ['category_id' => 8, 'serve_id' => ':serveId']) }}".replace(':serveId', serveId)
    };

    $(document).ready(function() {
      $.each(menuLinks, function(key, value) {
        $('#menu_' + key).attr('href', value);
      });
    });
  });
</script>