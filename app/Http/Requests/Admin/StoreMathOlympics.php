<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreMathOlympics extends FormRequest
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
        'title'   => 'required',
        'type'    => 'required',
        'grade' => 'required',
        'venue' => 'required',
        'finish_at' => 'required',
        'base_url' => 'nullable|file',
        'inscription_url' => 'nullable',
        'inscription_group_url' => 'nullable'
      ];
    }
    
    public function attributes()
    {
        return [
          'title'   => 'Titulo',
          'grade' => 'Grado',
          'venue' => 'Sede',
          'finish_at' => 'Fecha de finalización',
          'base_url' => 'Pdf de las bases',
          'inscription_url' => 'Url de inscripción individual',
          'inscription_group_url' => 'Url de inscripción grupal'
        ];
    }
}
