<!-- resources/views/sidemenu.blade.php -->
@extends('layouts.default')

@section('content')
@if (session('success'))
<p>{{ session('success') }}</p>
@endif

  @if (!empty($menus) && count($menus) > 0)
  <div class="miso_soup_wrap">
  <ul class="menu_list">
  <h2>味噌汁をお得に変更しませんか？</h2>
  @foreach ($menus as $menu)
  <li class="menu_list_item accounting" id="{{ $menu->menu_id }}">
    <a href="/sidemenu">
      @php
      $filename = 'storage/image/' . $menu->menu_image;
      $menu_price = $menu->menu_price;
      $option_price = !empty($menu->option_price) ? $menu->option_price : 0;
      $subtotalamount = $menu_price + $option_price;
      @endphp
      <img src="{{asset($filename)}}" width="100" height="100" class="menu_img">
      <p>{{ $menu->menu_name }}</p>
      <p class="menu_price">￥{{$subtotalamount}}</p>
      <input type="hidden" class="menu_title_input" name="menu_title" value="{{ $menu->menu_name }}">
      <input type="hidden" class="option_title_input" name="option_title" value="{{ $menu->option_name }}">
      <input type="hidden" class="menu_id_input" name="menu_id" value="{{ $menu->menu_id }}">
      <input type="hidden" class="option_id_input" name="option_id" value="{{ $menu->option_id }}">
      <input type="hidden" class="menu_price_input" name="menu_price" value="{{$subtotalamount}}">
    </a>
  </li>
  @endforeach
  </ul>
  </div>
  @endif


  @if (!empty($menus02) && count($menus02) > 0)
  <div class="sidemenu_wrap">
  <ul class="menu_list">
  <h2>定食とご一緒にいかがですか？</h2>
  @foreach ($menus02 as $menu02)
  <li class="menu_list_item accounting" id="{{ $menu02->menu_id }}">
    <a href="/sidemenu">
      @php
      $filename = 'storage/image/' . $menu02->menu_image;
      $menu_price = $menu02->menu_price;
      $option_price = !empty($menu02->option_price) ? $menu02->option_price : 0;
      $subtotalamount = $menu_price + $option_price;
      @endphp
      <img src="{{asset($filename)}}" width="100" height="100" class="menu_img">
      <p>{{ $menu02->menu_name }}</p>
      <p class="menu_price">￥{{$subtotalamount}}</p>
      <input type="hidden" class="menu_title_input" name="menu_title" value="{{ $menu02->menu_name }}">
      <input type="hidden" class="option_title_input" name="option_title" value="{{ $menu02->option_name }}">
      <input type="hidden" class="menu_id_input" name="menu_id" value="{{ $menu02->menu_id }}">
      <input type="hidden" class="option_id_input" name="option_id" value="{{ $menu02->option_id }}">
      <input type="hidden" class="menu_price_input" name="menu_price" value="{{$subtotalamount}}">
    </a>
  </li>
  @endforeach
  </ul>
  </div>
  @endif


<form action="{{ route('sidemenu.store') }}" method="POST" class="setmenu_form" id="setmenu_form">
  @csrf
  <!-- フォームの内容はここに -->
</form>
@endsection