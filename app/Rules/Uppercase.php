<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Uppercase implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (strtoupper($value) !== $value) {
            $fail('The :attribute must be uppercase.');
        }
    }

    public function passes($attribute, $value)
    {
        // condition to be PASSED - VER9
        return strtoupper($value) === $value;
    }

    public function message()
    {
        // VER9
        return 'The attribute must be uppercase.';
    }
}
