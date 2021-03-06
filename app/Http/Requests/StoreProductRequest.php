<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreProductRequest extends FormRequest
{
    public function rules()
    {
        return [
            'description' => [
                'required', 'string',
            ]
        ];
    }

    public function authorize()
    {
        return Gate::allows('task_access');
    }
}
