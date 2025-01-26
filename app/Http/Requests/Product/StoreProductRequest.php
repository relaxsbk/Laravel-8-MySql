<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{

    public function rules()
    {
        return [
            'article' => ['required', 'string', 'max:255', 'unique:products', 'regex:/^[a-zA-Z0-9]+$/'],
            'name' => ['required', 'string', 'min:10', 'max:255',],
            'data.color' => ['string', 'max:255'],
            'data.size' => ['string', 'max:255'],
            'data.material' => ['string', 'max:255'],
        ];
    }
}
