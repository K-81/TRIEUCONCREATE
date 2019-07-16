<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequestsUpdate extends FormRequest
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
            'note.required'      => 'Vui lòng nhập ghi chú',
        ];
    }
}
