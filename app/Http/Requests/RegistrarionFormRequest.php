<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrarionFormRequest extends FormRequest
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
            'name' => 'required|string|max:191|min:4',
            'designation' =>'required|string|max:191|min:4',
            'mobile' => 'required|numeric|digits:11|unique:users',
            'role' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ];
    }
}
