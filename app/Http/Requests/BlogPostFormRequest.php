<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostFormRequest extends FormRequest
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
                'nullable'
            ],
            'name'=>[
                'required',
                'string',
            ],
            'slug'=>[
                'required',
                'unique:blog_posts,slug',
                'string',
            ],
            'image'=>[
                'image',
                'nullable'
            ],
            'blog_description'=>[
                'required',
                'string',
            ],
            'status'=>[
                'nullable'
            ],
            'meta_title'=>[
                'nullable'
            ],
            'meta_keyword'=>[
                'nullable'
            ],
            'meta_description'=>[
                'nullable'
            ],
            'navbar_status'=>[
                'nullable'
            ],
            'created_by'=>[
                'nullable'
            ],
        ];
    }
}
