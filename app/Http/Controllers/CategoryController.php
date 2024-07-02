<?php

// CategoryController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category');
    }
}

// TakeawayController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TakeawayController extends Controller
{
    public function index()
    {
        return view('takeaway');
    }
}
