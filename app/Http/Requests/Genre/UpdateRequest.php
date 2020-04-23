<?php

namespace App\Http\Requests\Genre;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::user())
        {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'bail|required|string|min:2',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле обязательно к заполнению',
            'name.string' => 'Поле обязано быть строкой',
            'name.min' => 'Минимальное количество символов :min',
        ];
    }
}
