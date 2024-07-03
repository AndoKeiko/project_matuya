<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Receipt;
use App\Models\Tax;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function index($menu_id)
    {
      $menus_option = Menu::where('menu_id', $menu_id)->with('options')->orderBy('indate', 'asc')->get();
      return view('receipt', [
        'menus_option' => $menus_option,
      ]);
    }

    public function show(Request $request, $order_id)
    {
      $order = Order::with(['orderDetails.menu', 'tax'])->find($order_id);
      return view('receipt', [
          'order' => $order,
      ]);
    }

}
