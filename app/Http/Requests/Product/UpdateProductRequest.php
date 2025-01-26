<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
{

    public function rules()
    {
        return [
            'article' => ['string', 'max:255', Rule::unique('products')->ignore($this->route('product')->id), 'regex:/^[a-zA-Z0-9]+$/'],
            'name' => ['string', 'min:10', 'max:255',],
            'data.color' => ['string', 'max:255'],
            'data.size' => ['string', 'max:255'],
            'data.material' => ['string', 'max:255'],
        ];
    }
}
