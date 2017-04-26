<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Document;
use App\Models\Category;
use App\Models\Visibility;
use App\Models\Group;
use App\User;

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

    public function category() {
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
        $groups = Group::get();
        $users = User::get();

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
            'visibilities' => $visibilities,
            'groups' => $groups,
            'users' => $users
        ]);
    }

    public function editcategory($id) {
        $categories = Category::get();
        $visibilities = Visibility::get();
        $groups = Group::get();
        $users = User::get();
        $category = Category::find($id);

        $result = [];

        foreach ($categories as $key => $value) {
            $item = [
                'id' => $value['id'],
                'text' => $value['name'],
                'parent' => $value['pid'] ? $value['pid'] : '#'
            ];
            array_push($result, $item);
        }

        return view('pages.admin.category.edit', [
            'category' => $category,
            'categories' => $result,
            'visibilities' => $visibilities,
            'groups' => $groups,
            'users' => $users
        ]);
    }

    public function addcategory_ajax(Request $req) {
        try {
            $imageUrl = '';

            $image = $req->file('category_image');

            if (!empty($image)) {
                $destination = 'public/images/category_images/';
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(base_path().$destination, $imageName);
                $imageUrl = $destination.$imageName;
            }

            $newCateogry = new Category;

            $newCateogry->name = $req->input('category_name');
            $newCateogry->description = $req->input('category_description');
            $newCateogry->image_url = $imageUrl;

            $pid = $req->input('pid');

            $newCateogry->pid = $pid == '#' ? NULL : $pid;

            $visibility_id = $req->input('visibility');

            if ($visibility_id == 4) {
                $newCateogry->user_id = $req->input('user');
                $newCateogry->group_id = $req->input('group');
            }

            $newCateogry->visibility_id = $visibility_id;

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

    public function editcategory_ajax(Request $req) {
        try {
            $imageUrl = '';

            $image = $req->file('category_image');

            if (!empty($image)) {
                $destination = '/images/category_images/';
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(base_path().'/public'.$destination, $imageName);
                $imageUrl = $destination.$imageName;
            }
            $id = $req->input('id');
            $cateogry = Category::find($id);
            $cateogry->name = $req->input('category_name');
            $cateogry->description = $req->input('category_description');
            $cateogry->image_url = $imageUrl;
            $pid = $req->input('pid');
            
            if ($pid != $id) {
                $cateogry->pid = $pid == '#' ? NULL : $pid;    
            }
            $visibility_id = $req->input('visibility');
            if ($visibility_id == 4) {
                $cateogry->user_id = $req->input('user');
                $cateogry->group_id = $req->input('group');
            }
            $cateogry->visibility_id = $visibility_id;

            $result = [];

            $categories = Category::get();

            foreach ($categories as $key => $value) {
                $item = [
                    'id' => $value['id'],
                    'text' => $value['name'],
                    'parent' => $value['pid'] ? $value['pid'] : '#'
                ];
                array_push($result, $item);
            }

            if ($cateogry->save()) {
                return Response::json(array(
                    'success' => true,
                    'data' => $result
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

    public function deletecategory_ajax($id) {

        try {
            $category = Category::find($id);
            if ($category->delete()) {
                return Response::json(array(
                    'success' => true
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
