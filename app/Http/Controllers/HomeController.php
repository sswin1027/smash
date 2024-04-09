<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function category()
    {
        $categories = Category::all();
        return $categories;
        return view('home', ['categories' => $categories]);
    }
}
