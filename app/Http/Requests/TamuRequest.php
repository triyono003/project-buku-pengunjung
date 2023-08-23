<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TamuRequest extends FormRequest
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
       'username' => ['required','string','min:3','alpha_num'],
       'name' => ['required','string','min:3'],
       'email' => ['required','email','min:3'],
       'phone' => ['required'],
       'tujuan_kunjungan' => ['required','string','min:3'],
       'catatan' => ['required','string','min:3'],
        ];
    }
}
