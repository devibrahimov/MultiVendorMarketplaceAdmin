<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class ShopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=> 'nullable|max:50|string',
            'surname'=> 'nullable|max:50|string',
            'shopname'=> 'nullable|max:50|string',
            'shopcategory'=> 'nullable|integer',
            'number'=> 'nullable|max:50|string',
            'email'=> 'nullable|max:50|email|unique:shops',
            'adress'=> 'nullable|max:150|string',
            'password'=> 'nullable|max:150|string|confirmed',
            'aprovel' => 'nullable'

        ];
    }

    public function messages()
    {
        return [
            'name'=> 'required|max:50|string',
            'surname'=> 'required|max:50|string',
            'shopname'=> 'required|max:50|string',
            'shopcategory'=> 'required|max:50|integer',
            'number'=> 'required|max:50|string',
            'adress'=> 'required|max:150|string',

        ];
    }
}
