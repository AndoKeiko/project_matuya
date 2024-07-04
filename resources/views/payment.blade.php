@extends('layouts.default')
@section('content')
@if (session('message'))
        {{--{{ session('message') }}--}}
@endif
@if (!empty($payments) && count($payments) > 0)
@php
// 各カテゴリの配列を準備
$category1 = [];
$category2 = [];
@endphp

@foreach ($payments as $payment)
@if ($payment->payment_cat == 1)
@php
$category1[] = $payment;
@endphp
@elseif ($payment->payment_cat == 2)
@php
$category2[] = $payment;
@endphp

@endif
@endforeach

<div class="payment_select">
  <div class="payment_wrap">
    <dl class="payment_list">
      <dt>商品会計</dt>
      <dd class="payment_total_amount" id="payment_total_amount">0</dd>
    </dl>
    <dl class="payment_list">
      <dt>お預かり</dt>
      <dd>0</dd>
    </dl>
    <dl class="payment_list">
      <dt>不足</dt>
      <dd id="payment_list">0</dd>
    </dl>
  </div>
  <div class="payment_btn left"><a href="{{ route('receipt.show', ['order_id' => $order_id]) }}">現金</a></div>
  <div class="payment_btn right"><a href="{{ route('receipt.show', ['order_id' => $order_id]) }}">クレジット</a></div>
  @if (count($category1) > 0)
  <ul class="menu_list_left">
    @foreach ($category1 as $payment)
    <li id="">
      <a>
        @php
        $filename = 'storage/image/' . $payment->payment_img;
        @endphp
        <img src="{{ asset($filename) }}" width="100" height="100" class="payment_img">
        <div class="menu_text_box" id="">
          <p class="menu_title">{{ $payment->payment_name }}</p>
        </div>
      </a>
    </li>
    @endforeach
  </ul>
  @endif

  @if (count($category2) > 0)
  <ul class="menu_list_right">
    @foreach ($category2 as $payment)
    <li id="">
      <a>
        @php
        $filename = 'storage/image/' . $payment->payment_img;
        @endphp
        <img src="{{ asset($filename) }}" width="100" height="100" class="payment_img">
        <div class="menu_text_box" id="">
          <p class="menu_title">{{ $payment->payment_name }}</p>
        </div>
      </a>
    </li>
    @endforeach
  </ul>
  @endif
</div>
@endif
@endsection