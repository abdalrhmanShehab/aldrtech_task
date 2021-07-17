<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class portfilioRequest extends FormRequest
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
            'name'=> 'required',
            'data-class'=> 'required',
            'description'=> 'required',
            'title'=> 'required',
            'text'=> 'required',
            'image'=>'required|mimes:jpg,jpeg,png'
        ];
    }    
    
    public function message()
    {
        return [
            'name.required' => 'image required',
            'data-class.required' => 'data-class required',
            'description.required' => 'description required',
            'title.required' => 'title required',
            'text.required' => 'text required',
            'image.required'=>'image required',
        ];
    }
}
