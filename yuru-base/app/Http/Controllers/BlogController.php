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
        $category = BlogCategory::find($id);
        $category->update($request->all());
        return response()->json($category, 200);
    }

    public function deleteCategory($id) {
        $category = BlogCategory::find($id);
        $category::destroy($id);
        return response()->json(null, 204);
    }

    # API Structure testing

    public function index() {
        return BlogPost::all();
    }

    public function post(Request $request) {
        $validated = $request->validate([   
            'header_image' => 'required|string|max:255',
            'publish_date' => 'required|date_format:Y-m-d H:i:s',
            'author' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subheading' => 'required|string',
            'category_id' => 'required|integer|exists:blog_categories,id',
            'post_body' => 'required|string',
            'state' => 'required|string|in:draft,published,archived'
        ]);

        $post = BlogPost::create($validated);
        return response()->json($post, 201); 
    }

    public function show($id) {
        return BlogPost::find($id);
    }

    public function update(Request $request, $id) {
        $post = BlogPost::find($id);
        
        if (!$post) {
            return response()->json(['error' => 'Blog post not found'], 404);
        }

        $validated = $request->validate([
            'header_image' => 'sometimes|string|max:255',
            'publish_date' => 'sometimes|date_format:Y-m-d H:i:s',
            'author' => 'sometimes|string|max:255',
            'title' => 'sometimes|string|max:255',
            'subheading' => 'sometimes|string',
            'category_id' => 'sometimes|integer|exists:blog_categories,id',
            'post_body' => 'sometimes|string',
            'state' => 'sometimes|string|in:draft,published,archived'
        ]);

        $post->update($validated);
        return response()->json($post, 200);
    }

    public function delete($id) {
        BlogPost::destroy($id);
        return response()->json(null, 204);
    }
}   