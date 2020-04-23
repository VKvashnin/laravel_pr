<?php

namespace App\Http\Requests\User;

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
            'login' => 'bail|required|string|min:2',
            'email' => 'bail|required|string|min:2',
            'status' => 'required',
            'role' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле обязательно к заполнению',
            'name.string' => 'Поле обязано быть строкой',
            'name.min' => 'Минимальное количество символов :min',
            'email.required' => 'Поле обязательно к заполнению',
            'email.string' => 'Поле обязано быть строкой',
            'email.min' => 'Минимальное количество символов :min',
            'status.required' => 'Поле обязательно к заполнению',
            'role.required' => 'Поле обязательно к заполнению',
        ];
    }
}
