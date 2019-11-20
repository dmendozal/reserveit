<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreActivoRequest extends FormRequest
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
            'codigo'     => [
                'required', 'min:11'
            ],
            'estado'    => [
                'required|integer',
            ],
            'bien' => [
                'required|integer',
            ],
            'ubicacion'  => [
                'required|integer',
            ],
        ];
    }
}
