<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
  public function index(): View
  {
    // $menus = Menu::with('options')->orderBy('indate', 'asc')->get();
    // return view('menu', [
    //     'menus' => $menus
    // ]);
    $menus = DB::table('menu_table')->get();

    return view('menu.index', ['menu' => $menus]);
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

  }

  /**
   * Display the specified resource.
   */
  public function show(menu $menu)
  {
    //
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
