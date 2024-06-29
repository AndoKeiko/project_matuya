@extends('layouts.default')
@section('content')
<ul class="menu_list option_menu_list">
  @if (!empty($option_ids) && count($option_ids) > 0)
  @foreach ($options as $index => $option)
  @php
  if ($index === 0):
  @endphp
  <li class="menu_list_item first-item" id="{{ $option->option_id }}">
    <a href="">
      @foreach ($option->menu as $menu)
      @php
      $menu_price = $menu->menu_price;
      $option_price = !empty($menu->option_price) ? $menu->option_price : 0;
      $subtotalamount = $menu_price + $option_price;
      $filename = 'storage/image/' . $menu->menu_image; @endphp
      <img src="{{asset($filename)}}" width="80" height="37" class="menu_img">
      <p>{{ $menu->menu_name }}</p>
      @endforeach
    </a>
  </li>
  <li class="menu_list_item" id="{{ $option->option_id }}">
    <a href="">
      @foreach ($option->menu as $menu)
      <p>{{$option->option_name}}</p>
      <p class="menu_price">￥{{$subtotalamount}}</p>
      @endforeach
    </a>
  </li>
  @php
  else:
  @endphp
      
  
  <li class="menu_list_item" id="{{ $option->option_id }}">
    <a href="">
      @foreach ($option->menu as $menu)
      <p>{{$option->option_name}}</p>
      <p class="menu_price">￥{{$subtotalamount}}</p>
      @endforeach
    </a>
  </li>
  @php
    endif;
  @endphp
  @endforeach
  @endif
</ul>
@endsection