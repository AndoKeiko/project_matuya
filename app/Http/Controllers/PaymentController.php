<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
      $order_id = $request->session()->get('order_id');
      $payments = Payment::all();
      return view('payment', ['payments' => $payments, 'message' => session('message'),'order_id' => $order_id]);
    }

    public function show($order_id)
    {
      $order = Order::with(['details', 'tax'])->find($order_id);

      return view('receipt', [
          'order' => $order,
      ]);
    }

}
