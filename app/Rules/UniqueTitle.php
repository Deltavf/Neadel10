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
        if($this->max[0] == 'novel') {
            $novel = Novel::where('user_id', $this->max[1])->where('title', $value)->get();
            if(count($novel) != 0) {
                $fail('The :attribute has already been taken.');
            }
        } else if($this->max[0] == 'volume') { 
            $volume = Volume::where('novel_id', $this->max[1])->where('title', $value)->get();
            if(count($volume) != 0) {
                $fail('The :attribute has already been taken.');
            }
        }
    }
}
