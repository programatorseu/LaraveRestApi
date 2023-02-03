<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StoreEmployeeRequest extends FormRequest
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
            'imie' => ['required'],
            'nazwisko' => ['required'],
            'companyId' => ['required'],
            'email' => ['required'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'company_id' => $this->companyId,
            'numer_telefonu' => $this->numerTelefonu
        ]);
    }
}
