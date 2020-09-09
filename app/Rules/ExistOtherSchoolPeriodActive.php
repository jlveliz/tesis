<?php

namespace App\Rules;

use App\Models\SchoolPeriod;
use Illuminate\Contracts\Validation\Rule;

class ExistOtherSchoolPeriodActive implements Rule
{

    private $resourceId = null;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($resourceId = null)
    {
        $this->resourceId = $resourceId;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {

        if ($value) {
            if ($this->resourceId) {
                $resource = SchoolPeriod::where('state', $value)->where('id', '!=', $this->resourceId)->first();
            } else {
                $resource = SchoolPeriod::where('state', $value)->first();
            }
            
            if ($resource) return false;
            return true;
        } else {
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Ya existe un periodo activo';
    }
}
