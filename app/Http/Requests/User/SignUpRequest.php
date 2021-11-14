<?php

namespace App\Http\Requests\User;

use App\Rules\Password\CharacterLengthRule;
use App\Rules\Password\LimitCharacterTypesRule;
use App\Rules\Password\SymbolProhibitionRule;
use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
            'password' => [
                'required',
                new CharacterLengthRule,
                new LimitCharacterTypesRule,
                new SymbolProhibitionRule
            ]
        ];
    }
}
