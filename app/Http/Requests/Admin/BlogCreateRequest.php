<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogCreateRequest extends FormRequest
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
            'site'        => 'required|string|max:255',
            'title'       => 'required|string|max:255',
            'content'     => 'required|string',
            'created_at'  => 'nullable|date',
            'visible'     => 'nullable|boolean',
            'marker'      => 'nullable|boolean',
            'approved'    => 'nullable|boolean',
            'image' => 'nullable|array', // Acepta un array de imágenes
            'image.*' => 'mimes:jpeg,png,jpg,webp|max:2048', // Cada imagen debe ser válida y no superar los 2MB
            'markerimage' => 'nullable|string',
        ];
    }
    
}
