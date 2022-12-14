<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNoteBookRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'family_name_first_name_patronymic' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'company' => 'nullable|string',
            'birthday' => 'nullable|integer',
            'photo' => 'nullable|string'
        ];
    }
}

