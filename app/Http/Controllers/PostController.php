<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Validator;
use App\Http\Requests\CreateNewPostRequest;
use Gate;
use Storage;

class PostController extends Controller
{
    public function create() 
    {
        if(Gate::denies('post-create')) {
            abort(403);
        }
        $categories = Category::all();
        $tags = Tag::all();

        return view('posts.create', compact('categories', 'tags'));
    }

// CreateNewPostRequest $request
    public function store(Request $request)
    {
        // -------------Cách 2-----------
        // $request->validator([
        //     'title' => 'required|min:8',
        //     'description' => 'required',
        //     'content' => 'required',
        //     'category_id' => 'required',
        // ], [
        //     'title.required' => 'Tiêu đề là trường bắt buộc',
        //     'description.required' => 'Mô tả là trường bắt buộc',
        //     'content.required' => 'Nội dung là trường bắt buộc',
        //     'category_id.required' => 'Danh mục là trường bắt buộc',
        // ]); 

        // --------Cách 1------------
        // $validator = Validator::make($request->all(), [
        //     'title' => 'required|min:8',
        //     'description' => 'required',
        //     'content' => 'required',
        //     'category_id' => 'required',
        // ], [
        //     'title.required' => 'Tiêu đề là trường bắt buộc',
        //     'description.required' => 'Mô tả là trường bắt buộc',
        //     'content.required' => 'Nội dung là trường bắt buộc',
        //     'category_id.required' => 'Danh mục là trường bắt buộc',
        // ]);

        // if($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }


        // dd($request->file());
        $title = $request->input('title');
        $description = $request->input('description');
        $content = $request->input('content');
        $categoryId = $request->input('category_id');
        $tagIds = $request->input('tags_id', []);   // them tag

        $posts = new Post();
        $posts->title = $title;
        $posts->description = $description;
        $posts->content = $content;
        $posts->category_id = $categoryId;

        // if(!Storage::disk('post_image_uploads')->put('test.png', $file_content)) {
        //     return false;
        // }

        $thumbnail = $request->file('thumbnail');
        $filename = uniqid() .time() . '.' . $request->file('thumbnail')->extension();
        // dd($filename);
        $destinationPath  = public_path(). '/images/';
        $request->file('thumbnail')->move($destinationPath, $filename);

        $posts->thumbnail = $filename;
        $posts->save();
        $posts->tags()->sync($tagIds);       //them tag
        event(new \App\Events\PostCreated($posts));   // video 25/02/2021
        return redirect()->route('posts.index');
        
    }

    public function index(Request $request)
    {
        if(Gate::denies('post-index')) {
            abort(403);
        }

        $keyword = $request->input('key');
        $categoryId = $request->input('category_id');  // tim kiem theo category
        $tagIds = $request->input('tag_ids', []);

        $postQuery = Post::query();
        if ($keyword) {
            $postQuery->where('title', 'like', "%{$keyword}%");
        }

        if ($categoryId) {       
            $postQuery->where('category_id', $categoryId);
        }

        if(count($tagIds) > 0)
        {
            $postQuery->whereHas('tags', function ($query) use ($tagIds) {
                $query->whereIn('tags.id', $tagIds);
            });
        }
        // $posts = Post::paginate(5);
        $posts = $postQuery->paginate(5);
        // $posts = Post::all();

        $categories = Category::all(); // tra ve danh sach category trong select>option
        $tags = Tag::all();
        return view('posts.index', compact('posts', 'categories', 'tags'));
    }

    public function edit($id)
    {
        $tags = Tag::all();
        $categories = Category::all();
        $posts = Post::find($id);
        return view('posts.edit', compact('posts', 'categories', 'tags'));
    }

    public function update($id, Request $request)
    {
        //validate duw lieu
         $validator = Validator::make($request->all(), [
            'title' => 'required|min:8',
            'description' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ], [
            'title.required' => 'Tiêu đề là trường bắt buộc',
            'description.required' => 'Mô tả là trường bắt buộc',
            'content.required' => 'Nội dung là trường bắt buộc',
            'category_id.required' => 'Danh mục là trường bắt buộc',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $posts = Post::find($id);

        $title = $request->input('title');
        $description = $request->input('description');
        $content = $request->input('content');
        $categoryId = $request->input('category_id');
        $tagIds = $request->input('tags_id', []);  // update tag


        $posts->title = $title;
        $posts->description = $description;
        $posts->content = $content;
        $posts->category_id = $categoryId;
        $posts->save();
        $posts->tags()->sync($tagIds); // update tag
        event(new \App\Events\PostUpdated($posts));     //// video 25/02/2021
        return redirect()->route('posts.index');
        
    }

    public function destroy($id) 
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
