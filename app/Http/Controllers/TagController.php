<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function posts(Request $request, $id)
    {
    	$category = Category::find($id);

    	$posts = $category->posts()->paginate(2);
    	// dd($posts);
    	return view('category.posts', compact('posts'));
    }
}
