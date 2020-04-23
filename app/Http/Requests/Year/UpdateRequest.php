<?php

namespace App\Http\Requests\Year;

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
            'year' => 'bail|required|min:4|numeric|between:1901,2155|unique:years|',
        ];
    }

    public function messages()
    {
        return [
            'year.required' => 'Поле обязательно к заполнению',
            'year.unique' => 'Поле должно быть уникальным',
            'year.numeric' => 'Данные должны быть числом',
            'year.between' => 'Данные должны быть в диапазоне 1901 - 2155',
            'year.min' => 'Минимальное количество символов :min',

        ];
    }
}
