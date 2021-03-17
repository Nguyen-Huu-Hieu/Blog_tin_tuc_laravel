<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Auth;  // Auth trong file config/app
use Hash;
class AuthController extends Controller
{
    public function getFormLogin()
    {
        return view('auth.login');
    }

    public function submitLogin(Request $request) 
    {
        $username = $request->input('email');
        $password = $request->input('password');
        // attempt kiem tra email, password co dung 

        // Cách 1
       // attempt se return true khi email, password dung 

        if(Auth::attempt([
            'email' => $username,
            'password' => $password,
        ])) {
            $user = User::where('email', $username)->first();
            Auth::login($user);
            return redirect()->route('posts.index');
        } else {
            return back()->withError('Đăng nhập thất bại')->withInput();

        }

        // Cách 2
        // $user = User::where('email', $username)->first();
        // if(!$user) {    
        //     return back()->withError('Đăng nhập thất bại')->withInput();
        // }
        // if(Hash::check($password, $user->password)) {
        //     Auth::loginUsingId($user->id);
        //     // Auth::login($user);
        //     return redirect()->route('posts.index');
        // }
        // return back()->withError('Đăng nhập thất bại')->withInput();

    }

    public function getFormRegister()
    {
        return view('auth.register');
    }

    public function submitRegister(UserRegisterRequest $request)
    {
        $user = new User;
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->gender = $request->input('gender');
        $user->bio = $request->input('bio');
        $user->address = $request->input('address');
        $user->save();
        return redirect()->route('auth.login')->withSuccess('Đăng ký thành công');
    }
}
