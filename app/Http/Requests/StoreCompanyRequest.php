<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //bypasss
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
            'nazwa' => ['required'],
            'nip' => ['required'],
            'adres' => ['required'],
            'miasto' => ['required'],
            'kodPocztowy' => ['required']
        ];
    }
    // https://laravel.com/docs/9.x/validation#preparing-input-for-validation
    protected function prepareForValidation()
    {
        $this->merge([
            'kod_pocztowy' => $this->kodPocztowy
        ]);
    }
}
