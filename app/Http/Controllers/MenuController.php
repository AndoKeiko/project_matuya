<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Post;
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
      'menus_server' => $menus_server
    ]);

  }


  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // $category_id = new Menu();

    // $category_id->category_id = $request->category_id;
    // return $category_id;
  }

  /**
   * Display the specified resource.
   */
  public function show()
  {

  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(menu $menu)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, menu $menu)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(menu $menu)
  {
    //
  }
}
