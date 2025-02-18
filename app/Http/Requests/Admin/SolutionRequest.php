<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SolutionRequest extends FormRequest
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
            'university_id' => 'required',
            'display' => 'required',
            'exm_1' => '',
            'exm_2' => '',
            'exm_3' => '',
            'created_at' => 'required',
        ];
    }
}
