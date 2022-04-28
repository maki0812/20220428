<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Requests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'kana' => 'required|string|regex:/^[ァ-ヾ　〜ー]+$/u',
           'english' => 'required|string|regex:/^[!-~ ¥]+$/u',
        ];
    }
    public function prepareForValidation()
    {

        // 全角→半角 英数(※変換できないものもあるので注意)
        $this->merge(['english' => mb_convert_kana($this->english, 'as')]);
    }
}
