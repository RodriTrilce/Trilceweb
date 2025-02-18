<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class VenueAcademiaRequest extends FormRequest
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
            'name' => 'required',
            'horary' => 'required',
            'content' => 'required',
            'direction' => 'required',
            'phone' => 'required',
            'logitude' => 'required',
            'latitude' => 'required',
            'horary' => 'required'
        ];
    }
}
