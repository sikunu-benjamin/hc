<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRealisationRequest extends FormRequest
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
            'categories' => 'required',
            'description' => 'required',
            'desc_content_1' => 'required',
            'desc_content_2' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'title' => 'required|unique:realisations',
            'thunmail' => 'required|mimes:jpg,jpeg,png',
        ];
    }
}
