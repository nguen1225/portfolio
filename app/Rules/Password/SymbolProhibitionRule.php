<?php

namespace App\Rules\Password;

use Illuminate\Contracts\Validation\Rule;

class SymbolProhibitionRule implements Rule
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
        $symbols = config('app.prohibition_symbols_for_password');
        foreach (mb_str_split($value) as $letter) {
            if (in_array($letter, $symbols, true)) {
                return false;
            }
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('validation.password_symbol');
    }
}
