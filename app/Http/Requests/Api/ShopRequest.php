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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=> 'required|max:50|string',
            'surname'=> 'required|max:50|string',
            'shopname'=> 'required|max:50|string',
            'shopcategory'=> 'required|max:50|number',
            'number'=> 'required|max:50|string',
            'email'=> 'required|max:50|email',
            'adress'=> 'required|max:150|string',

        ];
    }
}
