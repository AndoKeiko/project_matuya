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
    /**
     * Display a listing of the resource.
     */
    public function index($menu_id)
    {
      $menus_option = Menu::where('menu_id', $menu_id)->with('options')->orderBy('indate', 'asc')->get();
      return view('receipt', [
        'menus_option' => $menus_option,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $order_id)
    {
      $order = Order::with(['orderDetails.menu', 'tax'])->find($order_id);
      return view('receipt', [
          'order' => $order,
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Receipt $receipt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Receipt $receipt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Receipt $receipt)
    {
        //
    }
}
