@extends('layouts.default')
@section('content')
<ul class="menu_list option_menu_list">
@if ($options->isNotEmpty())
  @php
    $firstOption = $options->first();
    $firstMenu = $firstOption->menu->first();
    $menu_price = $firstMenu->menu_price;
    $option_price = !empty($firstOption->option_price) ? $firstOption->option_price : 0;
    $subtotalamount = $menu_price + $option_price;
    $filename = 'storage/image/' . $firstMenu->menu_image;
  @endphp
  <li class="menu_list_item option first-item" id="{{ $firstOption->option_id }}">
    <img src="{{ asset($filename) }}" width="80" height="37" class="menu_img">
    <div class="option_first_menu_title_wrap"><p class="option_first_menu_title">{{ $firstMenu->menu_name }}</p>

    @if($firstMenu->allergies->isNotEmpty())
              <p class="option_first_menu_allergy">
                <span class="text-sm">アレルギー情報:</span>
                @foreach($firstMenu->allergies as $allergy)
                <span class="menu_allergies">
                  {{ $allergy->allergies_name }}
                  </span>
                @endforeach
                </p>
            @endif

    </div>
    
  </li>

  @foreach ($options as $option)
  <form action="{{ route('sidemenu.store') }}" method="POST" class="setmenu_form">
    @csrf
    <li class="menu_list_item option btn" id="{{ $option->option_id }}">
      <a href="{{ url('/sidemenu') }}">
        @php
        $menu = $option->menu->first();
        $menu_price = $menu->menu_price;
        $option_price = !empty($option->option_price) ? $option->option_price : 0;
        $subtotalamount = $menu_price + $option_price;
        $filename = 'storage/image/' . $menu->menu_image;
        @endphp
        <p class="menu_title">{{$option->option_name}}</p>
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
        <input type="hidden" class="subtotal_price_input" name="subtotal_price" value="{{ $subtotalamount }}">
        <input type="hidden" class="tax_id_input" name="tax_id" value="1">
        <input type="hidden" class="menu_title_input" name="menu_title" value="{{ $menu->menu_name }}">
        <input type="hidden" class="option_title_input" name="option_title" value="{{$option->option_name}}">
        <input type="hidden" class="menu_id_input" name="menu_id" value="{{ $menu->menu_id }}">
        <input type="hidden" class="option_id_input" name="option_id" value="{{ $option->option_id }}">
        <input type="hidden" class="menu_price_input" name="menu_price" value="{{$menu_price}}">
        <input type="hidden" class="option_price_input" name="option_price" value="{{ $option_price }}">
      </a>
    </li>
  </form>
  @endforeach

@endif
</ul>
@endsection