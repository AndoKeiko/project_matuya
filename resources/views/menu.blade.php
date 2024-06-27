@extends('layouts.default')
@section('content')
<ul class="menu_list">
        @if (!empty($menus) && count($menus) > 0)
            @foreach ($menus as $menu)
              <li class="menu_list_item">
                @php
                    $filename = 'storage/image/' . $menu->menu_image;
                    $totalamount = $menu->menu_price + $menu->options->option_price;
                @endphp
                <div><img src="{{asset($filename)}}" width="80" height="37"></div>
                <div id="{{ $menu->menu_id }}"><p class="menu_title">{{ $menu->menu_name }}{{$menu->options->option_name}}</p><p class="menu_price">￥{{$totalamount}}</p></div>
              </li>
            @endforeach
        @endif

</ul>
@endsection