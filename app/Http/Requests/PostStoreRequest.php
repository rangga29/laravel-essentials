<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:3'],
            'body' => ['required', 'min:5', 'max:100']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
