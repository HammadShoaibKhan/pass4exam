<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends FormRequest
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
            'title' => 'required',
            'vendor_id' => 'required',
            'certification_id' => 'required',
            'exam_code' => 'required'
        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'Name is required',
            'vendor_id.required' => 'Select a vendor',
            'certification_id.required' => 'Select a certification',
            'exam_code.required' => 'Exam code is required' 
        ];
    }
}
