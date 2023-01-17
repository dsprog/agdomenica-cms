<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DisciplineRequest extends FormRequest
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
            'title' => 'required|max:255|min:3',
            'ead_id' => 'required|integer',
            'user_id' => 'required|integer'
        ];

        if ($this->method() == 'PUT') {
            $rules['title'] = 'required|max:255|min:3';
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'title' => 'título'
        ];
    }
}
