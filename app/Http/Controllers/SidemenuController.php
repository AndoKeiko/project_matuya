<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Sidemenu;
use Illuminate\Http\Request;

class SidemenuController extends Controller
{
  public function index(Request $request)
  {
      $menus = Sidemenu::where('side_flug', 1)
          ->orderBy('indate', 'asc')
          ->get()
          ->unique('menu_id');
  
      $menus02 = Sidemenu::where('side_flug', 2)
          ->orderBy('indate', 'asc')
          ->get()
          ->unique('menu_id');
  
      return view('sidemenu', [
          'menus' => $menus,
          'menus02' => $menus02,
      ]);
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
