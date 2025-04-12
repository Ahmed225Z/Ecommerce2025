<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    // App\Http\Requests\ProductRequest
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'desc' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer|min:1', // <-- صحح هنا
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }


    public function messages(): array
    {
        return [
            'name.required' => 'Product name is required.',
            'name.string' => 'Product name must be a string.',
            'name.max' => 'Product name must not exceed 255 characters.',
    
            'desc.required' => 'Description is required.',
            'desc.string' => 'Description must be a string.',
    
            'price.required' => 'Price is required.',
            'price.numeric' => 'Price must be a numeric value.',
    
            'quantity.required' => 'Quantity is required.',
            'quantity.integer' => 'Quantity must be an integer.',
            'quantity.min' => 'Quantity must be at least 1.',
    
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'Image must be of type: jpeg, png, jpg, gif.',
            'image.max' => 'Image size must not exceed 2MB.',
        ];
    }
    
}
