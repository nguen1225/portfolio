<?php

namespace App\Rules\Password;

use Illuminate\Contracts\Validation\Rule;

class LimitCharacterTypesRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (preg_match('/[a-z]/', $value) && preg_match('/[A-Z]/', $value) && preg_match('/\d/', $value)) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('validation.password_limit_character_type');
    }
}
