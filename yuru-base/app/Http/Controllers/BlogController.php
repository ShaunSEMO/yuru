<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\BlogCategory;

class BlogController extends Controller
{

    public function indexCategory() {
        return BlogCategory::all();
    }

    public function createCategory(Request $request) {
        $validated = $request->validate([
            'icon' => 'required',
            'category_name' => 'required',
        ]);

        $category = BlogCategory::create($request->all());
        return response()->json($category, 201);
    }
    
    public function showCategory($id) {
        return BlogCategory::find($id);
    }

    public function updateCategory(Request $request, $id) {
        $cateogry = BlogCategory::find($id);
        $category->update($request->all());
        return response()->json($category, 200);
    }

    public function deleteCategory($id) {
        $category = BlogCategory::find($id);
        return response()->json(null, 204);
    }

    # API Structure testing

    public function index() {
        return BlogPost::all();
    }

    public function post(Request $request) {

        $validated = $request->validate([
            'title' => 'required',
            'post_body' => 'required',
        ]);

        $post = BlogPost::create($request->all());
        return response()->json($post, 201); 
    }

    public function show($id) {
        return BlogPost::find($id);
    }

    public function update(Request $request, $id) {
        $post = BlogPost::find($id);
        $post->update($request->all());
        return response()->json($post, 200);
    }

    public function delete($id) {
        BlogPost::destroy($id);
        return response()->json(null, 204);
    }
}   