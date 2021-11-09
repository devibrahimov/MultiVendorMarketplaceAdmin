<?php

namespace App\Http\Requests\General;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'image' => 'required|mimes:png|dimensions:max_width=470,max_height=501',
            'icon' => 'required|mimes:png|dimensions:max_width=100,max_height=100',
            'name' => 'required|max:25',
            'description' => 'required|max:50',
        ];
    }



    public function messages()
    {
        return [
            'image.required' => '"Ağ Logo" Bölməsi boş buraxıla bilməz.Logo png formatında logo file yükləyin.',
            'image.mime' => '"Ağ Logo" png formatında logo fayl seçib yükləyin.',
            'image.dimensions' => '"Ağ Logo" Fayl ölçülər yanlışdır. Genişlik:470px ,Yüksəklik:501px olmalıdır.',
            'icon.required' => '"Icon" Bölməsi boş buraxıla bilməz.Logo png formatında logo file yükləyin.',
            'icon.mime' => '"Icon" png formatında logo fayl seçib yükləyin.',
            'icon.dimensions' => '"Icon" Fayl ölçülər yanlışdır. Genişlik:100px ,Yüksəklik:100px olmalıdır.',
            'name.required' => 'Kategoriya adı bölməsi boş buraxıla bilməz',
            'name.max' => 'Kategoriya adı bölməsi maksimum 25 hərfdən ibarət ola bilər ',
            'description.required' => 'Kategoriya açıqlama bölməsi boş buraxıla bilməz',
            'description.max' => 'Kategoriya açıqlama bölməsi maksimum 50 hərfdən ibarət ola bilər',

        ];
    }

}
