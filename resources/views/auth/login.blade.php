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
    @if(Session::get('success')) 
    <div class="alert alert-success" role="alert">
        {{ Session::get('success')}}
    </div>

    @endif    

    @if(Session::get('error')) 
    <div class="alert alert-danger" role="alert">
        {{ Session::get('error')}}
    </div>

    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <h1>Login</h1>
                <form action="" method="POST">
                @csrf

                <div class="form-group">
                    <label>Email</label>
                    {{-- <input class="form-control" value="{{ old('email')}}" type="email" name="email" placeholder="Nhập email ..."> --}}
                    <input class="form-control" value="huuhieu2468@gmail.com" type="email" name="email" placeholder="Nhập email ...">
                </div>      

                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Nhập mật khẩu ...1234">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="">
                    <label class="form-check-label">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                
                </form>
            </div>
        </div>
    </div>
</body>
</html>