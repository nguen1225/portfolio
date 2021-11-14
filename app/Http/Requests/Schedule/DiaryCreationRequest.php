<?php

namespace App\Http\Requests\Schedule;

use App\Rules\Form\TextLengthRule;
use App\Rules\Form\TitleLengthRule;
use Illuminate\Foundation\Http\FormRequest;

class DiaryCreationRequest extends FormRequest
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
            'title' => [
                'required',
                new TitleLengthRule
            ],
            'content' => [
                'required',
                new TextLengthRule
            ]
        ];
    }
}
