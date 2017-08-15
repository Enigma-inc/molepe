<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssetRequest extends FormRequest
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
            'asset-number' => 'required',
            'asset-description' => 'required',
            'parent-asset' => 'required',
            'identifier' => 'required',
            'asset-dimensions' => 'required', 
            'asset-construction' => 'required',
            'asset-zone' => 'required',
            'asset-subclass' => 'required',
            'asset-location' => 'required',
            'asset-group' => 'required'
        ];
    }
}
