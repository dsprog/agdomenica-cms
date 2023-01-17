<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigRequest extends FormRequest
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
            'address' => 'required|max:255',
            'address_number' => 'required|max:10',
            'address_city' => 'required|max:255',
            'address_state' => 'required|max:2',
            'address_cep' => 'required|max:10',
            'phone' => 'required|max:19',
            'phone2' => 'required|max:19',
            'email' => 'required|email|max:255',
            'facebook' => 'required|url|max:255',
            'instagram' => 'required|url|max:255',
            'linkedin' => 'required|url|max:255',
            'whatsapp' => 'required|max:19',
            'map' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'address' => 'endereço',
            'address_number' => 'número',
            'address_city' => 'cidade',
            'address_state' => 'estado',
            'address_cep' => 'CEP',
            'phone' => 'telefone',
            'phone2' => 'telefone 2',
            'email' => 'e-mail',
            'facebook' => 'facebook',
            'instagram' => 'instagram',
            'linkedin' => 'linkedin',
            'whatsapp' => 'whatsapp',
            'map' => 'mapa'
        ];
    }
}
