<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
  /**
   * [index description]
   * @param  integer $limit [description]
   * @return [type]         [description]
   */
  public function index(INT $limit = 10) {
    $categories = Categorie::orderBy('created_at', 'desc')
                ->take($limit)
                ->get();
    return view('categories.index', compact('categories'));
  }
}
