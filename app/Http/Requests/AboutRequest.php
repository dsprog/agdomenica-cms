<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'resume' => 'required',
            'about' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
        ];
    }

    public function attributes()
    {
        return [
            'resume' => 'resumo',
            'about' => 'sobre',
            'image' => 'imagem',
            'image2' => 'imagem 2'
        ];
    }
}
