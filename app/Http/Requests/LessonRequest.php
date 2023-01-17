<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
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
            'ead_id' => 'required|integer',
            'discipline_id' => 'required|integer',
            'title' => 'required|max:255',
            'resume' => 'required',
            'download_url' => 'nullable|url',
            'vimeo_id' => 'required|max:255',
            'expiration_date' => 'nullable|date',
            'published_at' => 'required|date',
            'active' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'ead_id' => 'curso',
            'discipline_id' => 'disciplina',
            'title' => 'título',
            'resume' => 'resumo',
            'download_url' => 'link de download',
            'vimeo_id' => 'id do vídeo do vimeo',
            'expiration_date' => 'data de expiração',
            'published_at' => 'data de publicação',
            'active' => 'ativo',
        ];
    }
}
