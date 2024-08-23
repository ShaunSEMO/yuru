<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\BlogPost;

class BlogController extends Controller
{
    public function index() {
        return BlogPost::all();
    }

    public function post(Request $request) {
        $post = BlogPost::create($request->all());
        return response()->json($post, 201); 
    }

    public function show($id) {
        return BlogPost::find($id);
    }

    public function update(Request $request, $id) {
        $post = BlogPost::findOrFail($id);
        $item->update($request->all());
        return response()->json($post, 200);
    }

    public function delete($id) {
        BlogPost::destroy($id);
        return response()->json(null, 204);
    }
}
