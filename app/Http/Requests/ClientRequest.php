<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
        $rules = [
            'title' => 'required',
            'image' => 'required|image|dimensions:width=300,height=300'
        ];
        if ($this->method() == 'PUT') {
            return [
                'image' => 'nullable|image|dimensions:width=300,height=300'
            ];
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'title' => 'cliente',
            'image' => 'imagem'
        ];
    }
}
