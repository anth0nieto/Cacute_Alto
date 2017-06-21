<?php

namespace consejo_com\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CuotaCreateRequest extends FormRequest
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
        'n_finca'=>'required|exists:finca,nombre',
        'monto' => 'required|numeric',
        'ci_tesorero' => 'required|numeric|digits_between:6,8',
        'nombre_tesorero' => 'required|string',
        'ci_contribuyente' => 'required|numeric|digits_between:6,8',
        'nombre_contribuyente' => 'required|string',
        'mes_cancelado' => 'required',
        ];
    }
}
