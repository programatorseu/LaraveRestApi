<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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

    public function rules()
    {
        if ($this->method() == 'PUT') {
            return [
                'nazwa' => ['required'],
                'nip' => ['required'],
                'adres' => ['required'],
                'miasto' => ['required'],
                'kodPocztowy' => ['required']
            ];
        } else {
            return [
                'nazwa' => ['sometimes', 'required'],
                'nip' => ['sometimes', 'required'],
                'adres' => ['sometimes', 'required'],
                'miasto' => ['sometimes', 'required'],
                'kodPocztowy' => ['sometimes', 'required']
            ];
        }
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'kod_pocztowy' => $this->kodPocztowy
        ]);
    }
}
