@extends('layouts.default')
@section('content')
  <ul class="menu_list">
    @csrf
    @if (!empty($menus_option) && count($menus_option) > 0)
    @foreach ($menus_option as $menu)
    <li class="menu_list_item" id="{{ $menu->menu_id }}">
      @php
      $filename = 'storage/image/' . $menu->menu_image;
      $subtotalamount = $menu->menu_price + $menu->option_price;
      @endphp
      <img src="{{asset($filename)}}" width="80" height="37" class="menu_img">
      <div id="">
        <p class="menu_title">{{ $menu->menu_name }}{{$menu->option_name}}</p>
        <p class="menu_price">￥{{$subtotalamount}}</p>
      </div>
      <input type="hidden" class="menu_title_input" name="menu_title" value="{{ $menu->menu_name }}{{$menu->option_name}}">
      <input type="hidden" class="menu_id_input" name="menu_id" value="{{ $menu->menu_id }}">
      <input type="hidden" class="menu_price_input" name="menu_price" value="{{$subtotalamount}}">
    </li>
    @endforeach
    @endif
  </ul>
@endsection
