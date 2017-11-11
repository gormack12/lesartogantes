<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeammemberUpdateRequest extends FormRequest
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
            'firstname' => 'bail|required',
            'lastname' => 'bail|required',
            'role' => 'bail|required',
            'about' => 'bail|required',
            'email' => 'bail|required|email',
        ];
    }
}
