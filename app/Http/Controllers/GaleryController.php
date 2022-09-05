<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GaleryController extends Controller
{

    public function index()
    {
        return view('index.galery', [
            'title' => 'galery',
            'galery' => Galery::with('category')->get()
        ]);
    }

    public function show(Category $category)
    { 
        return view('index.galery', [
            'title' => 'galery',
            'galery' => $category->galery->load('category')
        ]);
    }


}
