<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'image' => 'required|image|dimensions:width=1900,height=850',
            'image_mobile' => 'required|image|dimensions:width=700,height=350',
            'expiration_date' => 'nullable|date',
            'published_at' => 'required|date',
            'url' => 'nullable|url',
        ];
        if ($this->method() == 'PUT') {
            return [
                'image' => 'nullable|image|dimensions:width=1900,height=850',
                'image_mobile' => 'nullable|image|dimensions:width=700,height=350',
            ];
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'title' => 'título',
            'image' => 'imagem',
            'image_mobile' => 'imagem mobile',
            'expiration_date' => 'data de expiração',
            'published_at' => 'data de publicação',
            'url' => 'link',
        ];
    }
}
