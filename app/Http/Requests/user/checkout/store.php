<?php

namespace App\Http\Requests\user\checkout;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $expiredValidation = date('Y-m', \time());

        return [
            'name' => 'required|string',
            'email' => 'required|unique:users,email,'.Auth::id().'id',
            'occupation' => 'required|string',
            'card_number' => 'required|numeric|digits_between:8,16',
            'expired' => 'required|date|date_format:Y-m|after_or_equal:'.$expiredValidation,
            'cvc' => 'required|numeric|digits:3',
        ];
    }
}