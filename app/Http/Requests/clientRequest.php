<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class clientRequest extends FormRequest
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
            'say'=> 'required',
            'image'=>'required|mimes:jpg,jpeg,png'
        ];
    }    
    
    public function message()
    {
        return [
            'say.required' =>'say required',
            'image.required'=>'image required',
        ];
    }
}
