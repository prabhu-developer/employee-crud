<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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

    public function messages()
    {
        return [
            'gender_id.required' => 'Gender is required!',
            'department_id.required' => 'Department is required!',
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"             => "required|max:255",
            "mobile"           => "required|max:12",
            "gender_id"        => "required",
            "designation"      => "required",
            "department_id"    => "required",
            "birth_date"       => "required",
            "appointment_date" => "required",
            "join_date"        => "required",
            "address"          => "max:500",
        ];
    }
}
