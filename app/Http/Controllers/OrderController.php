<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{

  public function processPayment(Request $request)
  {
      try {
          Log::info('payment called');
  
          // Insert new order into order_table and get the order_id
          DB::table('order_table')->insert([
              'subtotal_price' => $request->input('subtotal_price'),
              'tax_id' => $request->input('tax_id'),
              'total_price' => $request->input('total_price'),
              'payment_id' => $request->input('payment_id'),
              'indate' => now(),
              'updated_at' => now(),
          ]);
  
          $order_id = DB::getPdo()->lastInsertId();
          Log::info('New order inserted with order_id: ' . $order_id);
  
          // Get the order details from the request
          $orderDetails = $request->input('order_details');
          Log::info('Order details received', ['orderDetails' => $orderDetails]);
  
          for ($i = 0; $i < count($orderDetails); $i += 6) {
              $menu_id = $orderDetails[$i + 1]['menu_id'] ?? null;
              $option_id = !empty($orderDetails[$i + 4]['option_id']) ? $orderDetails[$i + 4]['option_id'] : null;
  
              // Skip if menu_id is not valid
              if (empty($menu_id) || !is_numeric($menu_id)) {
                  Log::warning('Invalid or empty menu_id, skipping', ['menu_id' => $menu_id]);
                  continue;
              }
  
              Log::info('Processing order detail', [
                  'menu_id' => $menu_id,
                  'option_id' => $option_id,
              ]);
  
              if ($option_id !== null) {
                  // Check if option_id exists in options table
                  $optionExists = DB::table('options')->where('id', $option_id)->exists();
                  if (!$optionExists) {
                      Log::warning('Option ID does not exist, setting to null', ['option_id' => $option_id]);
                      $option_id = null; // Set to null or handle as needed
                  }
              }
  
              if ($option_id !== null) {
                  // Insert into order_detail_table with option_id
                  DB::statement("INSERT INTO `order_detail_table` (`order_id`, `menu_id`, `option_id`, `indate`, `updated_at`) VALUES (?, ?, ?, now(), now())", [
                      $order_id, $menu_id, $option_id
                  ]);
              } else {
                  // Insert into order_detail_table without option_id
                  DB::statement("INSERT INTO `order_detail_table` (`order_id`, `menu_id`, `indate`, `updated_at`) VALUES (?, ?, now(), now())", [
                      $order_id, $menu_id
                  ]);
              }
          }
          DB::commit();
          // return redirect()->route('payment.index')->with('message', 'Payment processed successfully');
          return redirect()->route('receipt', ['order_id' => $order_id]);
      } catch (\Exception $e) {
        DB::rollBack();
          // Log the exception and return a response with the error message
          Log::error('Error processing payment: ' . $e->getMessage());
          return response()->json(['error' => 'Error processing payment: ' . $e->getMessage()], 500);
      }
  }
  
}