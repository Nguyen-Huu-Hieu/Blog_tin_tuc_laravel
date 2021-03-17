<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function Index(Request $request)
    {	
    
    	$categories = Category::all();
    	$posts = Post::orderBy('id','desc')->get();
    	$time = Carbon::now();
    	return view('client.page.home', compact('posts', 'categories', 'time'));
    }

  	public function PostsByCategory($id)
  	{
    	$categories = Category::all();
    	$posts_by_category = Post::where('category_id', $id)->orderBy('id','desc')->get();
    	return view('client.page.posts_by_category', compact('posts_by_category', 'categories'));
  	}

  	public function Search(Request $request)
  	{
    	$keyword = $request->input('search_news');
    	$posts = Post::query()->where('title', 'like', "%{$keyword}%")->get();
    	$categories = Category::all();

    	return view('client.page.search', compact('posts', 'categories'));

  	}

    public function SinglePage($id)
    {
      $post = Post::find($id);
      $categories = Category::all();

      return view('client.page.single_page', compact('post', 'categories'));
    }
}
