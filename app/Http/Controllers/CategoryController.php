<?php

// CategoryController.php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
  public function index($serve_id): View
  {
      $serveType = $serve_id;
      return view('category', compact('serve_id'));
  }
}
