<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequestCreate extends FormRequest
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
            'prestation',
            'phone',
            'type_de_maison',
            // 'type_de_construction',
            'style_de_construction',
            'nombres_de_pieces',
            'surfaces',
            'terrain',
            'personnel',
            'permis',
            'budget',
            'finance',
            'date_de_demarage',
            'objectif',
            'budget_appro',
            'description',
        ];
    }
}
