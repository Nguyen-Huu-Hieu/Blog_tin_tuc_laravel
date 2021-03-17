<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required',
            'address' => 'required',
            'bio' => 'required',
            'email' => 'required|email',
            'gender' => 'required|numeric|in:1,2',
            'password' => 'required|min:4',
            'repassword' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => ' Tên Không được để trống',
            'address.required' => ' Địa chỉ Không được để trống',
            'bio.required' => 'Giới thiệu bản thân Không được để trống',
            'email.*' => 'Email Không hợp lệ',
            'gender.in' => 'Giới tính Không hợp lệ',
            'gender.required' => 'Giới tính Không được để trống',
            'gender.numeric' => 'Giới tính Không hợp lệ',
            'password.required' => 'Mật khẩu Không được để trống',
            'repassword.required' => 'Nhập lại mật khẩu Không được để trống',
        ];
    }
}
