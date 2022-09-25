<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FitnessCenterFormRequest extends FormRequest
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

            'category_id'=> [
                'required',
                'integer'
            ],
            'name'=> [
                'required',
                'string'
            ],
            'description'=> [
                'required',
                'string'
            ],
            'bussiness_name'=> [
                'required',
                'string'
            ],
            'location'=> [
                'required',
                'string'
            ],
            'city'=> [
                'required',
                'integer'
            ],
            'directions'=> [
                'required',
                'string'
            ],
            'availability'=> [
                'required',
            ],
            'live_streams'=> [
                // 'required'
            ],
            // 'status'=> [
            //     'required',
            // ],
            'kcal'=> [
                'required',
                'integer'
            ],
            'duration'=> [
                'required',
                'string'
            ],
            
        ];
    }
}
