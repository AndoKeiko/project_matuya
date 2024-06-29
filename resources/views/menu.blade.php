@extends('layouts.default')
@section('content')
<ul class="menu_list">
  @if (!empty($menus_option) && count($menus_option) > 0)
  @foreach ($menus_option as $menu)
      @php
      $option_ids = $menu->options->pluck('option_id')->toArray();
      @endphp
      @if ($menu->options->isEmpty())
        <li class="menu_list_item accounting" id="{{ $menu->menu_id }}">
      @else
        <li class="menu_list_item setmenu" id="{{ $menu->menu_id }}">
        <a href="{{ route('option.index', ['option_ids' => $option_ids]) }}">
      @endif
      @php
      $filename = 'storage/image/' . $menu->menu_image;
      $menu_price = $menu->menu_price;
      $option_price = !empty($menu->option_price) ? $menu->option_price : 0;
      $subtotalamount = $menu_price + $option_price;
      @endphp
      {{-- {{$menu}} --}}
      <img src="{{asset($filename)}}" width="100" height="100" class="menu_img">
      <div class="menu_text_box" id="">
        <p class="menu_title">{{ $menu->menu_name }}{{$menu->option_name}}</p>
        <p class="menu_price">￥{{$subtotalamount}}</p>
      </div>
      <input type="hidden" class="menu_title_input" name="menu_title" value="{{ $menu->menu_name }}{{$menu->option_name}}">
      <input type="hidden" class="menu_id_input" name="menu_id" value="{{ $menu->menu_id }}">
      <input type="hidden" class="menu_price_input" name="menu_price" value="{{$subtotalamount}}">
      @if (!$menu->options->isEmpty())
    </a>
    @endif
  </li>
  @endforeach
  @endif
</ul>
@endsection