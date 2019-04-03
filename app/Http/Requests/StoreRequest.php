<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'subject' => 'required',
            'date' => 'required',
            'time' => 'required',
            'location' => 'required',
            'confirm' => 'required',
            'user_name' => 'required',
            'user_company' => 'required',
            'user_mobileNo' => 'required',
            'user_email' => 'required',
            'c_name' => 'required',
            'c_company' => 'required',
            'c_mobileNo' => 'required',
            'c_email' => 'required'
        ];
    }
}
