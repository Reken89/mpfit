<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderAddRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'     => 'required|string',
            'product'  => 'required|integer',
            'comment'  => 'required|string',
            'quantity' => 'required|integer',
        ];
    }   
}
