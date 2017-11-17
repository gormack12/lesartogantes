<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'picture' => 'file',
            'theme' => 'required',
            'name' => 'required',
            'startday' => 'required|numeric',
            'startmonth' => 'required|numeric',
            'startyear' => 'required|numeric',
            'endday' => 'required|numeric',
            'endmonth' => 'required|numeric',
            'endyear' => 'required|numeric',
            'location' => 'required',
            'description' => 'required',
        ];
    }
}
