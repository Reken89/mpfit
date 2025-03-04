<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id'          => 'required|integer',
            'name'        => 'required|string',
            'description' => 'required|string',
            'category'    => 'required|integer',
            'price'       => 'required|numeric|between:0.00,99999999.99',
        ];
    }   
}

