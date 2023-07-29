<?php

namespace App\Http\Requests\Admin\ContentBenefit;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return \true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'subtitle' => 'required',
            'icon' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title tidak boleh Kosong',
            'subtitle.required' => 'Sub Title tidak boleh Kosong',
            'icon.required' => 'Icon tidak boleh Kosong'
        ];
    }
}
