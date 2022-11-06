<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFillWorksheet extends FormRequest
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
            'birth_date' => 'required|date',
            'country' => 'string|min:3|max:40|required',
            'city' => 'string|min:1|max:100|required',
            'sex' => 'string|min:1|max:10|required',
            'skills' => 'required',
            'achievements' => 'required',
            'have_team' => 'required|string',
        ];
    }
}