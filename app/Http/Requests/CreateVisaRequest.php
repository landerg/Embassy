<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVisaRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            "passport_type" => 'required|string|in:passport,id-passport',
            "passport_no" => 'required|unique:visas|string|max:8|min:8',
            "country_code" => 'required|string|max:10',
            "first_name" => 'required|string|max:255',
            "given_name" => 'required|string|max:255',
            "birth_date" => 'required|date',
            "birth_place" => 'required|string|max:255',
            "sex" => 'required|in:male,female',
            "issue" => 'required|date',
            "expire" => 'required|date',
            "authory" => 'required|string|max:4',
        ];
    }
}
