{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body> --}}

@extends('layout.master')
@section('post_edit')

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Sửa bài viết</h1>
				<form action="{{ route('posts.update', $posts->id)}}" method="POST" role="form">
					@csrf
					@method('put')
					<div class="form-group">
						<label for="">Title</label>
						<input name="title" value="{{old('title', $posts->title)}}" type="text" class="form-control" id="" placeholder="Input field">
						@error('title')
							<p class="text-danger">{{ $message}}</p>
						@enderror
					</div>	
					<div class="form-group">
						<label for="">Description</label>
						<input type="text" value="{{ old('description', $posts->description) }}" name="description" class="form-control" id="" placeholder="Input field">
						@error('description')
							<p class="text-danger">{{ $message}}</p>
						@enderror
					</div>
					<div class="form-group">
						<label for="">Content</label>
			            <textarea name="content" cols="30" rows="5" class="form-control">{{ old('content', $posts->content)}}</textarea>
					</div>
						@error('content')
							<p class="text-danger">{{ $message}}</p>
						@enderror

					<div class="form-group">
						<label for="">Category</label>
						<select  id="" class="form-control" name="category_id">
							<option value="">Chọn danh mục</option>
							@foreach($categories as $category)
								<option {{ $category->id == $posts->category_id ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->name}}</option>

							@endforeach
						</select>
						@error('category_id')
							<p class="text-danger">{{ $message}}</p>
						@enderror
					</div>

					@php
						$tagsIds =old('tags_id', $posts->tags->pluck('id')->toArray());
					@endphp
					<div class="form-group">
						<label for="">Tag</label>
						<select multiple  id="" class="form-control select2" name="tags_id[]">
							@foreach($tags as $tag)
								<option {{ in_array($tag->id, $tagsIds) ? 'selected' : ''}} value="{{ $tag->id }}">{{ $tag->name}}</option>

							@endforeach
						</select>
					</div>

					<button type="submit" class="btn btn-primary">Update</button>
				</form>
			</div>
		</div>
	</div>
	
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
	$(document).ready(function() {
	    $('.select2').select2();
	});
</script>
{{-- </body>
</html>
 --}}

@endsection

