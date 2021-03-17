<?php

use Illuminate\Support\Facades\Route;


Route::get('/niit', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('homepage');
});

Route::get('/hello', 'PageController@home');
Route::get('/create-p', function () {
    $post = new \App\Models\Post;
    $post->title = 'Chao lop Laravel NIIT';
    $post->description = 'Day la mo ta bai viet';
    $post->content = 'Day la noi dung bai viet';
    $post->status = 1;
    $post->category_id = 1;
    $post->user_id = 1;
    $post->save();
    echo 'create new post success';
});

Route::get('update-p', function() {
    $post = \App\Models\Post::find(3);
    $post->title = 'Bai viet so 3';
    $post->description = 'Day la mo ta bai viet so 3';
    $post->content = 'Day la noi dung bai viet';
    $post->status = 1;
    $post->category_id = 1;
    $post->user_id = 1;
    $post->save();
    echo 'update post success';
});

Route::get('/delete-p', function() {
    $post = \App\Models\Post::find(9);
    $post->delete();
    echo 'delete success';
});

Route::get('/count-post', function() {
    $total_post = \App\Models\Post::count();
    echo 'tổng bài viết:' .$total_post;
});

// Route::get('/posts', function() {
//     $posts = \App\Models\Post::all();
//     foreach($posts as $post) 
//     {
//         echo $post->title ."<br>";
//     }
// });

Route::get('/posts-by-category', function() {
    $posts = \App\Models\Post::where('category_id', 1)->get();
    // dd($posts);
    foreach($posts as $post) 
    {
        echo $post->title;
    }
});

Route::get('/posts-by-where', function() {
    $posts = \App\Models\Post::where('id', 1)->orwhere(function ($query) {
        $query->where('id', 3);
        $query->where('status', 1);
    })->get();
    // dd($posts);
    foreach($posts as $post) 
    {
        echo $post->title ."<br>";
    }
});


Route::get('/giai-pt-b2', 'Ptb2Controller@getFormGiaiPtb2');
Route::get('/submitPtb2', 'Ptb2Controller@submitPtb2'); //lấy Dl


// Start Route blog tin tuc
Route::get('/login', 'AuthController@getFormLogin')->name('auth.login');
Route::post('/login', 'AuthController@submitLogin'); // post: tạo mới DL
Route::get('register', 'AuthController@getFormRegister');
Route::post('register', 'AuthController@submitRegister')->name('register.submit');


Route::get('post-edit', 'PostController@edit');
Route::put('posts', 'PostController@update'); //route cap nhat DL
Route::delete('posts', 'PostController@destroy'); //route xóa DL

//Route của các bài viết posts
// thêm middleware, khi sang tab ẩn danh sẽ tự chuyển về trang auth.login vì user chưa đăng nhập
Route::group([
    'middleware' => 'auth',
    // 'prefix' => 'admin' 
], function() {
    Route::get('posts/create', 'PostController@create')->name('posts.create'); //hiển thị form tạo mới
    Route::post('posts', 'PostController@store'); // nhận DL từ form tạo mới

    // Route::get('posts', 'PostController@index')->name('posts.index')->middleware('permission.checker:admin|editor|moderator');

    Route::get('posts', 'PostController@index')->name('posts.index');

    Route::get('posts/{id}/edit', 'PostController@edit')->name('posts.edit');
    Route::put('posts/{id}', 'PostController@update')->name('posts.update');
    Route::delete('posts/{id}', 'PostController@destroy')->name('posts.destroy');

    Route::get('categories/{id}/posts', 'CategoryController@posts');

    Route::get('tags/{id}/posts', 'TagController@posts');

    // Route của category
    Route::get('categories/create', 'CategoryController@create')->name('categories.create');
    Route::post('categories', 'CategoryController@store');
    Route::get('categories', 'CategoryController@index')->name('categories.index');
    Route::get('categories/{id}/edit', 'CategoryController@edit')->name('categories.edit');
    Route::put('categories/{id}', 'CategoryController@update')->name('categories.update');
    Route::delete('categories/{id}', 'CategoryController@destroy')->name('categories.destroy');
    Route::get('only-male', function() {
        echo "gender bằng 1 thì mới được vào";
    })->middleware('only.male');
});
Route::get('/', 'HomeController@Index')->name('home');
Route::get('posts_by_category/{id}', 'HomeController@PostsByCategory')->name('PostsByCategory');
Route::get('search', 'HomeController@Search')->name('search');


 Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });

Route::get('single_page/{id}', 'HomeController@SinglePage')->name('single_page');






// hoc middleware, ko truy cap thi tra ve trang 403
Route::get('403', function() {
    return view('403');
})->name('403');



// Route tao DL
Route::get('fake-category', function() {
    $categoris = [
        'Kinh Tế',
        'Văn Hóa',
        'Pháp Luật',
        'Thể Thao',
        'Công nghệ',
    ];

    foreach($categoris as $category) {
        $cate = new \App\Models\Category;
        $cate->name = $category;
        $cate->description = $category;
        $cate->save();
    }
});

Route::get('fake-user', function() {
    $user = new \App\Models\User;
    $user->username = "ThuyDuong";
    $user->email = "thuyduong2468@gmail.com";
    $user->gender = 2;
    $user->password = bcrypt('123');
    $user->save();

});

Route::get('fake-profile', function() {
    $profile = new \App\Models\Profile;
    $profile->id_code = '12231212';
    $profile->address = 'Ha Noi';
    $profile->gender = 1;
    $profile->user_id = 1;
    $profile->save();
});

Route::get('relationship/one-to-one', function() {
    $user = \App\Models\User::find(1);
    echo "Username:   {$user->username} " ."<br>";
    echo "Address:" .  $user->profile->address ;

});

Route::get('relationship/one-to-one-reverse', function() {
    $profile = \App\Models\Profile::find(1);
    echo "Username:   {$profile->address} " ."<br>";
    echo "Address:" .  $profile->user->username ;

});

Route::get('fake-tag', function() {
    $tag = new \App\Models\Tag;
    $tag->name = 'covid19';
    $tag->save();   

    $tag = new \App\Models\Tag;
    $tag->name = 'kinh te';
    $tag->save();   

    $tag = new \App\Models\Tag;
    $tag->name = 'MMA';
    $tag->save();

});

Route::get('user-profile', function() {
    if(Auth::check()) {
        dd(\Auth::user()->username);
    } else {
        echo 'Bạn chưa đăng nhập';
    }
});

