@extends('layouts.default')
@section('content')

<ul class="menu_list">
  @if (!empty($menus) && count($menus) > 0)
  @foreach ($menus as $menu)
  @if($menu->options->isEmpty())
  <li class="menu_list_item accounting" id="{{ $menu->menu_id }}">
    @else
  <li class="menu_list_item setmenu" id="{{ $menu->menu_id }}">
    <a href="{{ route('option.index', ['option_ids' => $menu->options->pluck('id')]) }}">
  @endif
      @php
      $filename = 'storage/image/' . $menu->menu_image;
      $menu_price = $menu->menu_price;
      $menu_id = $menu->menu_id;
      $option_price = !empty($menu->option_price) ? $menu->option_price : 0;
      $subtotalamount = $menu_price + $option_price;
      @endphp
      <img src="{{asset($filename)}}" width="130" height="130" class="menu_img">
      <div class="menu_text_box" id="">
        <p class="menu_title">{{ $menu->menu_name }}{{$menu->option_name}}</p>
        <p class="menu_price">￥{{$subtotalamount}}</p>
            @if($menu->allergies->isNotEmpty())
              <p class="mt-1.5">
                <span class="text-sm">アレルギー情報:</span>
                @foreach($menu->allergies as $allergy)
                <span class="menu_allergies">
                  {{ $allergy->allergies_name }}
                  </span>
                @endforeach
                </p>
            @endif

      </div>
      <input type="hidden" class="subtotal_price_input" name="subtotal_price" value="{{ $subtotalamount }}">
      <input type="hidden" class="tax_id_input" name="tax_id" value="1">
      <input type="hidden" class="menu_title_input" name="menu_title" value="{{ $menu->menu_name ?? '' }}">
      <input type="hidden" class="option_title_input" name="option_title" value="">
      <input type="hidden" class="menu_id_input" name="menu_id" value="{{ $menu->menu_id ?? '' }}">
      <input type="hidden" class="option_id_input" name="option_id" value="">
      <input type="hidden" class="menu_price_input" name="menu_price" value="{{$menu_price ?? ''}}">
      <input type="hidden" class="option_price_input" name="option_price" value="">

      @if($menu->options->isEmpty())
    </a>
    @endif
  </li>
  @endforeach
  @endif
</ul>
@endsection