<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequestsStore extends FormRequest
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
            'name'      => 'required|min:3',
            'address'   => 'required|min:3',
            'birthday'  => 'required|min:3',
            'name'      => 'required|min:3',
            'name'      => 'required|min:3',
            'name'      => 'required|min:3',
            'phone'     => 'required|min:3',
            'email'     => 'required|email|unique:users,email,'.$this->id,
            'password'  => 'required|min:6',
            'note'      => 'required',
            
           
        ];
    }
    public function messages()
    {
      return [
            'name.required'      => 'Vui lòng nhập họ tên',
            'name.min'           => 'Họ tên lớn hơn 3 ký tự.',
            'address.required'   => 'Vui lòng nhập họ tên',
            'address.min'        => 'Họ tên lớn hơn 3 ký tự.',
            'birthday.required'  => 'Vui lòng nhập họ tên',
            'birthday.min'       => 'Họ tên lớn hơn 3 ký tự.',
            'phone.required'     =>'Vui lòng nhập số điện thoại',
            'phone.min'          =>'Số điện thoại không nhỏ hơn 3',
            'email.required'     => 'Vui lòng nhập email',
            'email.email'        => 'Email đã tồn tại',
            'email.unique'       => 'Email đã tồn tại',
            'password.required'  => 'Vui lòng nhập mật khẩu',
            'password.min'       => 'Mật khẩu phải lớn hơn 6 ký tự',
            'note.required'      => 'Vui lòng nhập ghi chú',
        ];
    }
}
