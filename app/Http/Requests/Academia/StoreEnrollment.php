<?php

namespace App\Http\Requests\Academia;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnrollment extends FormRequest
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
          'step1_dni' => 'required|unique:academia_enrollment,student_dni',
          'step1_university' => 'required',
          'step1_venue' => 'required',
          'step1_cycle' => 'required',
          'step1_condition' => 'required',
          'step2_names' => 'required',
          'step2_lastname' => 'required',
          'step2_lastname_mother' => 'required',
          'step2_birth' => 'required',
          'step2_gender' => 'required',
          'step2_district' => 'required',
          'step2_address' => 'required',
          'step2_mobile' => 'required',
          'step2_email' => 'required',
          'step2_year_finish_school' => 'required',
          'step2_school' => 'required',
          'step2_universitypostulate' => 'required',
          'step2_profession' => 'required',

          'step3_apoderate' => 'required',

          'checkbox' => 'required',
          'g-recaptcha-response' => 'required|recaptcha'
        ];
    }

/*

//

// Se quito para funcionar con el WSDL de Sistemas
//'step1_turn' => 'required',

// Quitado a pedido de Marcela
'step2_phonehome' => 'required',

'step3_names' => 'required',
'step3_dni' => 'required',
'step3_phonehome' => 'required',
'step3_mobile' => 'required',
'step3_email' => 'required|email',
'step3_work_location' => 'required',
'step3_work_phone' => 'required',
'step3_profession' => 'required',
'step3_emergencyphone' => 'required',

*/

    public function attributes()
    {
        return [
          'step1_dni' => 'Paso 1: DNI',
          'step1_university' => 'Paso 1: Universidad',
          'step1_venue' => 'Paso 1: Sede',
          'step1_cycle' => 'Paso 1: Ciclo',
          'step1_turn' => 'Paso 1: Turno',
          'step1_condition' => 'Paso 1: Condición',
          'step2_names' => 'Paso 2: Nombres',
          'step2_lastname' => 'Paso 2: Apellido paterno',
          'step2_lastname_mother' => 'Paso 2: Apellido materno',
          'step2_district' => 'Paso 2: Distrito',
          'step2_address' => 'Paso 2: Dirección',
          'step2_gender' => 'Paso 2: Sexo',
          'step2_phonehome' => 'Paso 2: Télefono de casa',
          'step2_mobile' => 'Paso 2: Celular',
          'step2_email' => 'Paso 2: Email',
          'step2_year_finish_school' => 'Paso 2: Año que termino el colegio',
          'step2_school' => 'Paso 2: Colegio',
          'step2_universitypostulate' => 'Paso 2: Universidad a la que postulo',
          'step2_profession' => 'Paso 2: Carrera',
          'step2_oldacademy' => 'Paso 2: Academia anterior',
          'step3_apoderate' => 'Paso 3: Apoderado',
          'step3_names' => 'Paso 3: Nombres y apellidos',
          'step3_dni' => 'Paso 3: DNI',
          'step3_phonehome' => 'Paso 3: Télefono de casa',
          'step3_mobile' => 'Paso 3: Celulaar',
          'step3_email' => 'Paso 3: Email',
          'step3_work_location' => 'Paso 3: Lugar de trabajo',
          'step3_work_phone' => 'Paso 3: Télefono de trabajo',
          'step3_profession' => 'Paso 3: Ocupación',
          'step3_emergencyphone' => 'Paso 3: Télefono de emergencia',
          'checkbox' => 'Paso 3: Confirmación Términos y condiciones',
          'g-recaptcha-response' => 'Paso 3: Captcha'

        ];
    }
}
