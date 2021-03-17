@extends('layout.master')
@section('content')
<div id="register">
	<div class="container">
		<div class="col-md-6">
			<h1>Đăng Ký</h1>
			<br>
			<form action="{{ route('register.submit')}}" method="POST">
				@csrf
				<div class="form-group">
					<label for="exampleInputEmail1">UserName</label>
					<input type="text" value="{{ old('username')}}" name="username" class="form-control" id="" placeholder="Hieu Nguyen">
				</div>	
				@error('name')
					<p class="text-danger">{{ $message }}</p>
				@enderror		

				<div class="form-group">
					<label for="exampleInputEmail1">Address</label>
					<input type="text" value="{{ old('address')}}" name="address" class="form-control" id="" placeholder="Hieu Nguyen">
				</div>	
				@error('address')
					<p class="text-danger">{{ $message }}</p>
				@enderror

				<div class="form-group">
					<label for="exampleInputEmail1">Bio</label>
					<textarea class="form-control" name="bio" cols="30" rows="10">{{ old('bio')}}</textarea>
				</div>
				@error('bio')
					<p class="text-danger">{{ $message }}</p>
				@enderror

				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" value="{{ old('email')}}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				</div>	
				@error('email')
					<p class="text-danger">{{ $message }}</p>
				@enderror

				<div class="form-group">
					<label for="exampleInputEmail1">Gender</label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="gender" {{old('gender') == 1 ? 'checked' : ''}} id="exampleRadios1" value="1" checked>
						<label class="form-check-label" for="exampleRadios1">
							Male
						</label>
					</div>	
					<div class="form-check">
						<input class="form-check-input" type="radio" name="gender" {{old('gender') == 2 ? 'checked' : ''}} id="exampleRadios1" value="2" checked>
						<label class="form-check-label" for="exampleRadios1">
							Female
						</label>
					</div>
				</div>
				@error('gender')
					<p class="text-danger">{{ $message }}</p>
				@enderror

				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" value="{{ old('password')}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				@error('password')
					<p class="text-danger">{{ $message }}</p>
				@enderror

				<div class="form-group">
					<label for="exampleInputPassword1">Retype Password</label>
					<input type="password" name="repassword" value="{{ old('repassword')}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				@error('repassword')
					<p class="text-danger">{{ $message }}</p>
				@enderror

				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
</div>
@stop