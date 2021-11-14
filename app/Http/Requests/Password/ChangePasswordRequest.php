<?php

namespace App\Http\Requests\Password;

use App\Rules\Password\CharacterLengthRule;
use App\Rules\Password\LimitCharacterTypesRule;
use App\Rules\Password\SymbolProhibitionRule;
use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'change_password' => [
                'required',
                new CharacterLengthRule,
                new LimitCharacterTypesRule,
                new SymbolProhibitionRule
            ]
        ];
    }
}
