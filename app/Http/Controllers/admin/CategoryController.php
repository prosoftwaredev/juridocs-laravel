<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Document;
use App\Models\Category;
use App\Models\Visibility;

use Response;

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
        
        $result = [];

        foreach ($categories as $key => $value) {
            $item = [
                'id' => $value['id'],
                'text' => $value['name'],
                'parent' => $value['pid'] ? $value['pid'] : '#'
            ];
            array_push($result, $item);
        }

        return view('pages.admin.category.list', [
            'categories' => $result
        ]);

    }

    public function addcategory() {
        $categories = Category::get();
        $visibilities = Visibility::get();

        $result = [];

        foreach ($categories as $key => $value) {
            $item = [
                'id' => $value['id'],
                'text' => $value['name'],
                'parent' => $value['pid'] ? $value['pid'] : '#'
            ];
            array_push($result, $item);
        }

        return view('pages.admin.category.add', [
            'categories' => $result,
            'visibilities' => $visibilities
        ]);
    }

    public function addcategory_ajax(Request $req) {
        try {
            $imageUrl = '';

            if (!empty($image)) {
                $destination = '/images/category_images/';
                $imageName = $image->getClientOriginalExtension();
                $image->move(base_path().$destination, $imageName);
                $imageUrl = $destination.$imageName;
            }

            
            $newCateogry = new Category;
            $newCateogry->name = $req->input('category_name');
            $newCateogry->description = $req->input('category_description');
            $newCateogry->image_url = $imageUrl;

            $pid = $req->input('pid');

            $newCateogry->pid = $pid == '#' ? NULL : $pid;
            $newCateogry->visibility_id = $req->input('visibility');

        
            if ($newCateogry->save()) {
                return Response::json(array(
                    'success' => true,
                    'data' => $newCateogry
                ));
            }
            else {
                return Response::json(array(
                    'success' => false
                ));
            }

        } catch(Exception $e) {
            return Response::json(array(
                'success' => false,
                'error' => $exception->errorInfo
            ));
        }
        
    }
}
