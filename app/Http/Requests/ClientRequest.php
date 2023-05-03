<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:clients,email',
            'date_profiled' => 'required|date',
            'primary_legal_counsel' => 'required',
            'date_of_birth' => 'nullable|date',
            'profile_image' => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'case_details' => 'nullable',
        ];
    }
}