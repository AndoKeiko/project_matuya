@extends('layouts.default')
@section('content')
<ul class="menu_list">
        @if (!empty($menus_option) && count($menus_option) > 0)
            @foreach ($menus_option as $menu)
              <li class="menu_list_item">
                @php
                    $filename = 'storage/image/' . $menu->menu_image;
                    $totalamount = $menu->menu_price + $menu->option_price;
                @endphp
                <img src="{{asset($filename)}}" width="80" height="37" class="menu_img">
                <div id="{{ $menu->menu_id }}"><p class="menu_title">{{ $menu->menu_name }}{{$menu->option_name}}</p><p class="menu_price">￥{{$totalamount}}</p></div>
              </li>
            @endforeach
        @endif

</ul>
@endsection