@extends('layouts.default')
@section('content')
<ul class="menu_list option_menu_list">
  @if (!empty($option_ids) && count($option_ids) > 0)
  @foreach ($options as $index => $option)
  @php
  if ($index === 0):
  @endphp
  <li class="menu_list_item option first-item" id="{{ $option->option_id }}">
      @foreach ($option->menu as $menu)
      @php
      $menu_price = $menu->menu_price;
      $option_price = !empty($menu->option_price) ? $menu->option_price : 0;
      $subtotalamount = $menu_price + $option_price;
      $filename = 'storage/image/' . $menu->menu_image; @endphp
      <img src="{{asset($filename)}}" width="80" height="37" class="menu_img">
      <p>{{ $menu->menu_name }}</p>
      @endforeach
  </li>
  @php
  endif;
  @endphp
  @endforeach
  <form action="/sidemenu" method="POST" class="setmenu_form" id="setmenu_form">
  @csrf
  @foreach ($options as $index => $option)
  <li class="menu_list_item option accounting" id="{{ $option->option_id }}">
    <a href="/sidemenu">
      @foreach ($option->menu as $menu)
      <p>{{$option->option_name}}</p>
      <p class="menu_price">￥{{$subtotalamount}}</p>
      <input type="hidden" class="menu_title_input" name="menu_title" value="{{ $menu->menu_name }}">
      <input type="hidden" class="option_title_input" name="option_title" value="{{$option->option_name}}">
      <input type="hidden" class="menu_id_input" name="menu_id" value="{{ $menu->menu_id }}">
      <input type="hidden" class="option_id_input" name="option_id" value="{{ $option->option_id }}">
      <input type="hidden" class="menu_price_input" name="menu_price" value="{{$subtotalamount}}">
      @endforeach
    </a>
  </li>
  @endforeach
  </form>
  @endif
</ul>
@endsection