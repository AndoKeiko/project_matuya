<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
  public function index($category_id): View
  {

    $menu_allergy = Menu::with('allergies')->orderBy('indate', 'asc')->get();
    $menus_option = Menu::where('category_id', $category_id)->with('options')->orderBy('indate', 'asc')->get();
    $menus_server = Menu::with('serveMethods')->orderBy('indate', 'asc')->get();
    return view('menu', [
      'menu_allergy' => $menu_allergy,
      'menus_option' => $menus_option,
      'menus_server' => $menus_server,
    ]);
  }
}
