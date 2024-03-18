<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules():array
    {
       if (request()->isMethod('post')) {
        return [
            'name' => 'required|string|max:258',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string|'
        ];
       } else {
        return [
            'name' => 'required|string|max:258',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string'
        ];
       }
    }

    public function message()
    {
       if (request()->isMethod('post')) {
        return [
            'name' => 'Name is required',
            'image' => 'Image is required',
            'description' => 'Description is required'
        ];
       } else {
        return [
            'name' => 'Name is required',
            'image' => 'Image is required',
            'description' => 'Description is required'
        ];
       }
    }
}
