<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EadRequest extends FormRequest
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
            'title' => 'required|max:255|unique:eads,title',
            'resume' => 'required|max:255',
            'body' => 'required',
            'expiration_date' => 'nullable|date',
            'published_at' => 'required|date',
            'active' => 'required',

        ];

        if ($this->method() == 'PUT') {
            $rules['title'] = 'required|max:255|unique:eads,title,'.$this->ead;
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'title' => 'título',
            'resume' => 'resumo',
            'body' => 'conteúdo',
            'expiration_date' => 'data de expiração',
            'published_at' => 'data de publicação',
            'active' => 'ativo',
        ];
    }
}
