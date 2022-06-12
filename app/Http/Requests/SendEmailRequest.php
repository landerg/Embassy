<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendEmailRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            "user_name" => 'required|string|max:255',
            "user_email" => 'required|string|email|max:255',
            "description" => 'required|string|max:255',
        ];
    }
}
