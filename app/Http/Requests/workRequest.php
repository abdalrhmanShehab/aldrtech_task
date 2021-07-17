<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class workRequest extends FormRequest
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
            'title'=> 'required',
            'description'=> 'required',
            'image'=>'required|mimes:jpg,jpeg,png'
        ];
    }    
    
    public function message()
    {
        return [
            'title.required' => 'title required',
            'description.required' => 'description required',
            'image.required'=>'image required',
        ];
    }
}
