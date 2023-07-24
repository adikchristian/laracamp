<?php

namespace App\Http\Requests\Admin\Camp;

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
            'price' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title tidak boleh kosong',
            'price.required' => 'Price tidak boleh kosong',
            'price.numeric' => 'Price Harus berupa angka',
        ];
    }
}
