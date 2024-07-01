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
  @foreach ($options as $index => $option)
  <form action="{{ route('sidemenu.store') }}" method="POST" class="setmenu_form">
    @csrf
    <li class="menu_list_item option btn" id="{{ $option->option_id }}">
      <a href="{{ url('/sidemenu') }}">
        @foreach ($option->menu as $menu)
        @php
        $menu_price = $menu->menu_price;
        $option_price = !empty($option->option_price) ? $option->option_price : 0;
        $subtotalamount = $menu_price + $option_price;
        $filename = 'storage/image/' . $menu->menu_image;
        @endphp
        <p>{{$option->option_name}}</p>
        <p class="menu_price">￥{{$subtotalamount}}</p>
        <input type="hidden" class="subtotal_price_input" name="subtotal_price" value="{{ $subtotalamount ?? 0 }}">
        <input type="hidden" class="tax_id_input" name="tax_id" value="1">
        <input type="hidden" class="menu_title_input" name="menu_title" value="{{ $menu->menu_name ?? '' }}">
        <input type="hidden" class="option_title_input" name="option_title" value="{{$option->option_name ?? ''}}">
        <input type="hidden" class="menu_id_input" name="menu_id" value="{{ $menu->menu_id ?? '' }}">
        <input type="hidden" class="option_id_input" name="option_id" value="{{ $menu->option_id ?? '' }}">
        <input type="hidden" class="menu_price_input" name="menu_price" value="{{$menu_price ?? ''}}">
        <input type="hidden" class="option_price_input" name="option_price" value="{{ $option_price ?? '' }}">
        @endforeach
      </a>
    </li>
  </form>
  @endforeach

  @endif
</ul>
@endsection