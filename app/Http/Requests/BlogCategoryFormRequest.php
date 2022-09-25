<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCategoryFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>[
                'required',
            ],	
            'slug'=>[
                'required',
            ],	
            'description'=>[
                'required',
            ],	
            'image'=>[
                'nullable',
            ],	
            'meta_title'=>[
                'required',
            ],	
            'meta_keyword'=>[
                'required',
            ],	
            'meta_description'=>[
                'required',
            ],
            // 'navbar_status'=>[
            //     'nullable',
            // ],
            // 'status'=>[
            //     'nullable',
            // ],
           
        ];
    }
}
