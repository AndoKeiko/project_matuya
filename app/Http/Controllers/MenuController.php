<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
  public function index($serve_id, $category_id): View
  {
    $menu_allergy = Menu::with('allergies')->orderBy('indate', 'asc')->get();
    
    $menus = Menu::where('category_id', $category_id)
                 ->whereHas('serveMethods', function($query) use ($serve_id) {
                     $query->where('serve_method_table.serve_id', $serve_id);
                 })
                 ->with(['serveMethods' => function($query) use ($serve_id) {
                     $query->where('serve_method_table.serve_id', $serve_id);
                 }])
                 ->with('options')
                 ->orderBy('indate', 'asc')
                 ->get();

    return view('menu', [
        'menu_allergy' => $menu_allergy,
        'menus' => $menus,
        'category_id' => $category_id,
        'serve_id' => $serve_id,
    ]);
  }
}
