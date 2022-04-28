<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
         if ($this->path() == '/') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'gender'   =>'required',
            'email'    => 'required|email',
            'postcode' => 'required',
            'address'   => 'required',
            'building_name' => 'nullable',
            'opinion'  =>'required|max:120',
        ];
    }
}
