<?php

namespace App\Http\Requests\General;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
        'logo_color' => 'required|mimes:png|dimensions:max_width=300,max_height=100',
        'logo_black' => 'required|mimes:png|dimensions:max_width=300,max_height=100',
        'logo_white' => 'required|mimes:png|dimensions:max_width=300,max_height=100',
        'favicon' => 'required|mimes:png|dimensions:max_width=100,max_height=100',
        'title' => 'required|max:120',
        'meta_description' => 'required|max:250',
        'meta_tags' => 'required|max:3000'
        ];
    }




    public function messages()
    {
        return [
            'logo_color.required' => '"Rengli Logo" Bölməsi boş buraxıla bilməz.Logo png formatında logo file yükləyin.',
            'logo_color.mime' => '"Rengli Logo" png formatında logo fayl seçib yükləyin.',
            'logo_color.dimensions' => '"Rengli Logo" Fayl ölçülər yanlışdır. Genişlik:300px ,Yüksəklik:100px olmalıdır.',
            'logo_black.required' => ' "Qara Logo" Bölməsi boş buraxıla bilməz.Logo png formatında logo file yükləyin.',
            'logo_black.mime' => '"Qara Logo" png formatında logo fayl seçib yükləyin.',
            'logo_color.dimensions' => '"Qara Logo" Fayl ölçülər yanlışdır. Genişlik:300px ,Yüksəklik:100px olmalıdır.',
            'logo_white.required' => '"Ağ Logo" Bölməsi boş buraxıla bilməz.Logo png formatında logo file yükləyin.',
            'logo_white.mime' => '"Ağ Logo" png formatında logo fayl seçib yükləyin.',
            'logo_color.dimensions' => '"Ağ Logo" Fayl ölçülər yanlışdır. Genişlik:300px ,Yüksəklik:100px olmalıdır.',
            'favicon.required' => '"Favicon" Bölməsi boş buraxıla bilməz.Logo png formatında logo file yükləyin.',
            'favicon.mime' => '"Favicon" png formatında logo fayl seçib yükləyin.',
            'logo_color.dimensions' => '"Favicon" Fayl ölçülər yanlışdır. Genişlik:100px ,Yüksəklik:100px olmalıdır.',
            'title.required' => 'required|max:120',
            'title.max' => 'required|max:120',
            'meta_description.required' => 'required|max:250',
            'meta_description.max' => 'required|max:250',
            'meta_tags.required' => 'required|max:3000',
            'meta_tags.max' => 'required|max:3000',
            '',
        ];
    }

}
