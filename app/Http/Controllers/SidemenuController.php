<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Sidemenu;
use Illuminate\Http\Request;

class SidemenuController extends Controller
{
    public function index(Request $request)
    { 
      $menus = Sidemenu::with('options')->where('side_flug', 2)->orderBy('indate', 'asc')->get();
      $menus02 = Sidemenu::with('options')->where('side_flug', 1)->orderBy('indate', 'asc')->get();
      return view('sidemenu', [
          'menus' => $menus,
          'menus02' => $menus02,
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
        // フォームデータを取得
        $menuTitle = $request->input('menu_title');
        $optionTitle = $request->input('option_title');
        $menuId = $request->input('menu_id');
        $optionId = $request->input('option_id');
        $menuPrice = $request->input('menu_price');

        // 必要な処理を実行

        return redirect()->route('sidemenu.index')->with('success', 'データが送信されました。');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sidemenu $sidemenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sidemenu $sidemenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sidemenu $sidemenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sidemenu $sidemenu)
    {
        //
    }
}
