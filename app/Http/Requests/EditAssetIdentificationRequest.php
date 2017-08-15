<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditAssetIdentificationRequest extends FormRequest
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
            'description' => 'required',
            'identifier' => 'required',
            'dimensions' => 'required', 
            'construction' => 'required',            
            'zone' => 'required',
            'subclass' => 'required',
            'location' => 'required',
            'parent' => 'required',
            'group' => 'required',
        ];
            dd('I am here');
        
        
    }
}
