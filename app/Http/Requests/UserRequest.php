<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'doc_type'=>'required|in:CC,TI',
            'doc_num' => 'required|min:5|max:15',
            'name' => 'required|alpha|min:3|max:20',
            'last_name' => 'required|alpha|min:3|max:30',
            'phone' => 'required|numeric|min:10',
            'genre'=>'required|in:M,F',
            'user_name' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email',
            'password' => 'required'
        ];
    }
}
