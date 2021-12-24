<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nom'=>'string|required|min:3',
            'post'=>'string|required|min:15|max:1500',
            'profile'=>'image|required'
        ];
    }
}
