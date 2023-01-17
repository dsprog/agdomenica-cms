<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'title' => 'required|max:255|unique:courses,title',
            'resume' => 'required|max:255',
            'date_info'=> 'required|max:255',
            'image' => 'required|image|dimensions:width=500,height=500',
            'body' => 'required',
            'period' => 'required',
            'investment' => 'required',
            'subscription' => 'required|url',
            'more_info' => 'required',
            'published_at' => 'required|date',
        ];

        if ($this->method() == 'PUT') {
            $rules['title'] = 'required|max:255|unique:courses,title,'.$this->curso;
            $rules['image'] = 'nullable|image|dimensions:width=500,height=500';
        }
        return $rules;
    }

    public function attributes()
    {
        return [
            'title' => 'título',
            'resume' => 'resumo',
            'date_info'=> 'informações de data',
            'image' => 'imagem',
            'body' => 'corpo',
            'period' => 'período',
            'investment' => 'investimento',
            'subscription' => 'inscrição',
            'more_info' => 'mais informações',
            'published_at' => 'data de publicação',
        ];
    }
}
