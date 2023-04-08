<?php

namespace App\Rules;

use Closure;
use App\Models\Novel;
use App\Models\Volume;
use Illuminate\Contracts\Validation\ValidationRule;

class UniqueTitle implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */

    public $max;

    public function __construct($max)
    {
        $this->max = $max;
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $volume = Volume::where('novel_id', $this->max)->where('judul', $value)->get();
        if(count($volume) != 0) {
            $fail('The :attribute has already been taken.');
        }
    }
}
