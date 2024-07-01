@extends('layouts.default')
@section('content')
@if (session('message'))
<div class="alert alert-success">
  {{ session('message') }}
</div>
@endif
@php
use Carbon\Carbon;
@endphp
{{-- {{$order}} --}}
<div class="receipt_wrap">
  <h1>領収書</h1>
  @if($order)
  <div class="text-left mb-5">
  <h2>毎度ありがとうございました</h2>
  <p>{{ Carbon::parse($order->indate)->format('Y年m月d日') }}</p>
  <p>レシートNo: {{ $order->order_id }}</p>
  </div>
    @foreach ($order->orderDetails as $detail)
    @php
    $subtotal = floor($detail->menu->menu_price) + floor($detail->option->option_price?? 0);
    $total_amaunt = $order->total_price;
    $tax_amount = floor($order->total_price) * floor($order->tax->tax_rate)/100;
    $sub_amount = floor($total_amaunt - $tax_amount);
    @endphp
    <dl class="flex justify-between mt-1">
    <dt>
    {{ $detail->menu->menu_name }} {{ $detail->option->option_name??''}} 
    </dt>
    <dd>￥ {{$subtotal}}</dd>
    </dl>
    @endforeach
    @php
    
    @endphp
    <p class="text-left mb-5 flex justify-between text-xl mt-1"><span>小計(税抜 {{ floor($order->tax->tax_rate) }}%)</span> <span>￥ {{floor($sub_amount)}}</span></p>
  <p class="text-left mb-5 flex justify-between mt-0.5"><span>(消費税等 {{ floor($order->tax->tax_rate) }}%)</span> <span>￥ {{floor($tax_amount)}}</span></p>
  <p class="total_amount flex justify-between w-full"><span>合計</span> <span>￥ {{ $total_amaunt }}</span></p>
</div>
@else
<p>Order not found.</p>
@endif
@endsection