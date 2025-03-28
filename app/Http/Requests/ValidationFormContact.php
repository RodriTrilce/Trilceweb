<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationFormContact extends FormRequest
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
        'contact_message' => 'required',
        'contact_names' => 'required',
        'contact_phone' => 'required',
        'contact_email' => 'required|email',
        'contact_type'  => 'required',
        'g-recaptcha-response' => 'required|recaptcha'
      ];
    }
}
