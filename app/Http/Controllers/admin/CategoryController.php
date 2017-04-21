<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Document;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function category()
    {
        $categories = Category::get();

        return view('pages.admin.category.list', [
            'categories' => $categories
        ]);

    }

    public function addcategory() {
        return view('pages.admin.category.add');
    }
}
