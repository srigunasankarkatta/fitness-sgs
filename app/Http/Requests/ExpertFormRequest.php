<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpertFormRequest extends FormRequest
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
            'category_id'=>[
                'required'
            ],
            'name'=>[
                'required'
            ],
            'slug'=>[
                'required'
            ],
            'city'=>[
                'required'
            ],
            // 'status'=>[
            //     'required'
            // ],
            'description'=>[
                'required'
            ],
           
            'meta_title'=>[
                'required'
            ],
            'meta_keyword'=>[
                'required'
            ],
            'meta_description'=>[
                'required'
            ],
            // 'images'=>[
            //     'mimes:jpeg,png,jpg,gif,svg',
            //     'max:2048'
            // ],
            

        ];
       
    }
}
