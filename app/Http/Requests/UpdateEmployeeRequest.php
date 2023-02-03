<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
        if ($this->method() == 'PUT') {
            return [
                'imie' => ['required'],
                'nazwisko' => ['required'],
                'email' => ['required'],
            ];
        } else {
            return [
                'imie' => ['sometimes', 'required'],
                'nazwisko'  => ['sometimes', 'required'],
                'email' => ['sometimes', 'required']
            ];
        }
    }
}
