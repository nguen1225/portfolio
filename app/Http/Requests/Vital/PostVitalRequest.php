<?php

namespace App\Http\Requests\Vital;

use App\Rules\Form\InputValueRule;
use App\Rules\Form\TextLengthRule;
use App\Rules\Form\TitleLengthRule;
use Illuminate\Foundation\Http\FormRequest;

class PostVitalRequest extends FormRequest
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
                'nullable',
                new TextLengthRule
            ],
            'height' => [
                'nullable',
                new InputValueRule
            ],
            'body_weight' => [
                'nullable',
                new InputValueRule
            ],
            'max_blood_pressure' => [
                'nullable',
                new InputValueRule
            ],
            'min_blood_pressure' => [
                'nullable',
                new InputValueRule
            ],
            'heart_rate' => [
                'nullable',
                new InputValueRule
            ],
        ];
    }
}
