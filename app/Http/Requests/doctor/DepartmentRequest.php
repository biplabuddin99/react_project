<?php

namespace App\Http\Requests\doctor;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
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
            'DepartmentName'=>'bail|required|string',
            'DepartmentDescription'=>'bail|required|string',
            'status'=>'nullable',
        ];
    }
        public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
            'same' => 'The :attribute and :other must match.',
            'size' => 'The :attribute must be exactly :size.',
            'between' => 'The :attribute value :input is not between :min - :max.',
            'in' => 'The :attribute must be one of the following types: :values',
            'max' => 'Your :attribute is too long!',
            'min' => 'Your :attribute is too sort!'
        ];
    }
}
