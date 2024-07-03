<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
  public function index(Request $request): View
  {
      $option_ids = $request->query('option_ids');
      
      // $option_ids が null または空の場合、空の配列を使用
      if (empty($option_ids)) {
          $option_ids = [];
      } elseif (is_string($option_ids)) {
          // 文字列の場合、カンマで分割して配列に変換
          $option_ids = explode(',', $option_ids);
      }
  
      $options = Option::with(['menu' => function($query) {
        $query->select(
            'menu_table.menu_id',
            'menu_table.menu_name',
            'menu_table.menu_price',
            'menu_table.menu_image'
        )->with(['allergies' => function($q) {
            $q->select('allergies_table.allergies_id', 'allergies_table.allergies_name');
        }]);
    }]);
  
      // $option_ids が空でない場合のみ whereIn を適用
      if (!empty($option_ids)) {
          $options = $options->whereIn('option_id', $option_ids);
      }
  
      $options = $options->get();
  
      return view('option', compact('options'));
  }


  public function store(Request $request)
  {
    // フォームデータを取得
    $menuTitle = $request->input('menu_title');
    $optionTitle = $request->input('option_title');
    $menuId = $request->input('menu_id');
    $optionId = $request->input('option_id');
    $menuPrice = $request->input('menu_price');

    // 必要な処理を実行

    return redirect()->route('sidemenu.index')->with('success', 'データが送信されました。');
  }
}
