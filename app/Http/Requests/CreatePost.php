<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePost extends FormRequest
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
        return
        [
          'lastname' => ['required','string'],
          'firstname' => ['required','string'],
          'postal' => ['required','digits:7'],
          'prefectures' => ['required'],
          'town' => ['required','string'],
          'street' => ['required'],
          'tel' => ['required','digits_between:10,11'],
        ];
    }

    public function attributes()
    {
        return
        [
            'lastname' => '苗字',
            'firstname' => '名前',
            'postal' => '郵便番号',
            'prefectures' => '都道府県',
            'town' => '市町村',
            'street' => '番地',
            'tel' => '電話番号'
        ];
    }
}
