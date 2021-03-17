@extends('layout.master')
@section('category_create')

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

	
</head>
<body> --}}
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Tạo mới danh mục</h1>
			
				<form action="/categories" method="POST" role="form">
					@csrf
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" type="text" class="form-control" id="" placeholder="Nhập tên danh mục">
					</div>	
					<div class="form-group">
						<label for="">Description</label>
						<input type="text" name="description" class="form-control" id="" placeholder="Nhập mô tả danh mục" >
					</div>

					<button type="submit" class="btn btn-primary">Save</button>
				</form>
			</div>
		</div>
	</div>
{{-- 
</body>
</html>


 --}}

@endsection