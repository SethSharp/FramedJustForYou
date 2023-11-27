<?php

namespace App\Http\Requests\Files;

use Illuminate\Validation\Validator;

class StoreFileRequest extends \Illuminate\Foundation\Http\FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'file' => 'nullable'
        ];
    }

    public function withValidator($validator): void
    {
        $validator->validate();

        $validator->after(function (Validator $validator) {
            if (is_null($this->input('file'))) {
                $validator->errors()->add('file', 'Is required');
            }
        });
    }
}
