<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function index(Request $request): View
    {
      $option_ids = $request->query('option_ids', []);
      $options = Option::with('menu')->whereIn('option_id', $option_ids)->get();
      return view('option', compact('option_ids', 'options'));
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
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Option $option)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Option $option)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Option $option)
    {
        //
    }
}
