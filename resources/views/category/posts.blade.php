<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Danh sách bài viết</h1>
				<a style="float: right" href="{{ route('posts.create')}}" class="btn btn-primary">Tạo mới bài viết</a>
				<br>
				
				<form  action=""role="form">
					<div class="row">
						<div class="col-md-4">
							<input type="text" name="key" value="{{ request()->input('key')}}" class="form-control" id="" placeholder="Nhập nội dung tìm kiếm">
						</div>
						<div class="col-md-4">
							
							<button type="submit" class="btn btn-primary">Tìm kiếm</button>
						</div>
					</div>
				
				</form>
				<table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">Id</th>
				      <th scope="col">Title</th>
				      <th scope="col">Create at</th>
				      <th scope="col">Action</th>
				      <th scope="col">Category</th>

				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($posts as $post)
				    <tr>
				      <th scope="row">{{ $post->id }}</th>
				      <td>{{ $post->title }}</td>
				      <td>{{ $post->created_at}}</td>
				      <td style="display:flex">
				      	<a style="margin-right: 8px" href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">
				      		Edit
				      	</a>

						<form action="{{route('posts.destroy', $post->id)}}" method="POST" role="form">
							@csrf
							@method('delete')
							<button type="button" class="btn btn-danger btn-delete">delete</button>
						</form>

				      </td>
				      <td>
				      	@if($post->category_id)
				      		{{$post->category->name}}
				      	@endif
				      </td>
				    </tr>
					@endforeach
				  </tbody>
				</table>

				{{$posts->appends(request()->all())->render()}}
			</div>
		</div>
	</div>
	
	<script>
		$(document).ready(function() {
			$('.btn-delete').click(function() {
				let isDelete = confirm('Bạn có muốn xóa?');
				if(isDelete) {
					$(this).parents('form').submit();
				}
			})
		});
	</script>
</body>
</html>



