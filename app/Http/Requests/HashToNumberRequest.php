<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HashToNumberRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'input' => ['required','string','max:32']
        ];
    }
}
