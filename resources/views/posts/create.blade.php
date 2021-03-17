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
	@section('post_create')

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Tạo mới bài viết</h1>
				<div>
					@include('partials.modal-login')
				</div>
				<form action="/posts" method="POST" role="form" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="">Title</label>
						<input name="title" type="text" value="{{old('title')}}" class="form-control" id="" placeholder="Nhập tiêu đề" required="">
						@error('title')
						<p class="text-danger">{{ $message}}</p>
						@enderror
					</div>	
					<div class="form-group">
						<label for="">Description</label>
						<textarea name="description" class="form-control">{{old('description')}}</textarea>
						{{-- <input type="text" name="description" value="{{old('description')}}" class="form-control" id="" placeholder="Nhập mô tả" required=""> --}}
						@error('description')
						<p class="text-danger">{{ $message}}</p>
						@enderror
					</div>

					<div class="form-group">
						<label for="">Content</label>
						<textarea name="content" id="content" cols="30" rows="5" class="form-control" required="">{{old('content')}}</textarea>
						@error('content')
						<p class="text-danger">{{ $message}}</p>
						@enderror
					</div>

					<div class="form-group">
						<label>Ảnh</label>
						<input type="file" id="thumbnail" name="thumbnail" class="form-control" required="">
					</div>

					<div class="form-group">
						<label for="">Category</label>
						<select  id="" class="form-control" name="category_id" required="">
							<option  value="">Chọn danh mục</option>
							@foreach($categories as $category)
							<option {{old('category_id') == $category->id ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->name}}</option>

							@endforeach
						</select>
						@error('category_id')
						<p class="text-danger">{{ $message}}</p>
						@enderror
					</div>

					<div class="form-group">
						@php
						$inputTags = old('tags_id', []);
						@endphp
						<label for="">Tag</label>
						<select multiple  id="" class="form-control select2" name="tags_id[]">
							{{-- <option value="">Chọn Tag</option> --}}
							@foreach($tags as $tag)
							<option {{in_array($tag->id, $inputTags) ? 'selected' : ''}} value="{{ $tag->id }}">{{ $tag->name}}</option>

							@endforeach
						</select>
					</div>

					<button type="submit" class="btn btn-primary">Save</button>
				</form>
			</div>
		</div>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

	<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
	<script>
		$(document).ready(function() {
			$('.select2').select2();
		});


	//làm upload anh: plugin summernote
	$(document).ready(function(){

    // Define function to open filemanager window
    var lfm = function(options, cb) {
    	var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
    	window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
    	window.SetUrl = cb;
    };

    // Define LFM summernote button
    var LFMButton = function(context) {
    	var ui = $.summernote.ui;
    	var button = ui.button({
    		contents: '<i class="note-icon-picture"></i> ',
    		tooltip: 'Insert image with filemanager',
    		click: function() {

    			lfm({type: 'image', prefix: '/laravel-filemanager'}, function(lfmItems, path) {
    				lfmItems.forEach(function (lfmItem) {
    					context.invoke('insertImage', lfmItem.url);
    				});
    			});

    		}
    	});
    	return button.render();
    };

    // Initialize summernote with LFM button in the popover button group
    // Please note that you can add this button to any other button group you'd like
    $('#content').summernote({
    	toolbar: [
	    	['popovers', ['lfm']],
	    	['style', ['bold', 'italic', 'underline', 'clear']],
	    	['font', ['strikethrough', 'superscript', 'subscript']],
	    	['fontsize', ['fontsize']],
	    	['color', ['color']],
	    	['para', ['ul', 'ol', 'paragraph']],
	    	['height', ['height']]
    	],
    	buttons: {
    		lfm: LFMButton
    	}
    })
});	
</script>



{{-- </body>
</html>


--}}

@endsection