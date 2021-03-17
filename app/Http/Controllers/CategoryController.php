<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
	public function create()
	{
		return view('category.create');
	}

	public function store(Request $request)
	{
		$name = $request->input('name');
        $description = $request->input('description');

		$category = new Category();
		$category->name = $name;
		$category->description = $description;
		$category->save();
        return redirect()->route('categories.index');

	}

    public function posts(Request $request, $id)
    {
    	$category = Category::find($id);

    	$posts = $category->posts()->paginate(2);
    	// dd($posts);
    	return view('category.posts', compact('posts'));
    }

    public function index()
    {
    	$categories = Category::all();
    	return view('category.index', compact('categories'));
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }
    public function update($id, Request $request)
    {
        $category = Category::find($id);
        
        $name = $request->input('name');
        $description = $request->input('description');

        $category->name = $name;
        $category->description = $description;
        $category->save();
        return redirect()->route('categories.index');

    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index');
        
    }
}
