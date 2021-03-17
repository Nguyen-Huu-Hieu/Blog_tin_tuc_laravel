<!DOCTYPE html>
<html lang="en">
<head>
	@stack('meta');
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
	
{{-- 	<style type="text/css">

		#sidebar {
			display: inline-block;
			height: 100vh;
			background: rgb(225, 207, 128);
		}
		ul {
			margin: 0;
			padding: 0;
		}
		ul li {
			list-style: none;
			height: 50px;
			margin-left: 30px;
		}
		ul li:hover {
			background: rgb(233,192,14);
		}
		span {
			font-size: 22px;
		}
	
	</style> --}}
</head>
<body>
	<header>
		
	</header>
	<main>
		{{-- 	<div class="row">
				<div class="col-md-4 col-sm-4"> --}}
					<aside>
				        <div id="sidebar" class="nav-collapse">
				            <div class="leftside-navigation">
				                <ul class="sidebar-menu" id="nav-accordion">
				                    <li>
				                        <a class="active" href="{{ route('posts.index')}}">
				                            <i class="fa fa-dashboard"></i>
				                            <span>Trang chủ</span>
				                        </a>
				                    </li> 
				                    
				                    <li class="sub-menu">
				                        <a href="{{ route('categories.index')}}">
				                            <i class="fa fa-book"></i>
				                            <span>Danh mục chủ đề</span>
				                        </a>
				                    </li>

				                    <li class="sub-menu">
				                        <a href="{{ route('posts.index')}}">
				                            <i class="fa fa-book"></i>
				                            <span>Danh sách bài viết</span>
				                        </a>
				                    </li>

				                      <li class="sub-menu">
				                        <a href="">
				                            <i class="fa fa-book"></i>
				                            <span>Trang web người dùng</span>
				                        </a>
				                    </li>
				                </ul>            
				            </div>
				        </div>
    				</aside>
		{{-- 		</div>
				<div class="col-md-8 col-sm-8"> --}}
					@yield('content')
					@yield('category_index')
					@yield('category_create')
					@yield('category_edit')
					@yield('post_create')
					@yield('post_edit')
			{{-- 	</div>
			</div>
 --}}
		

	</main>
	<footer>
		
	</footer>
</body>
</html>
