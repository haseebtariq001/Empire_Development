<?php

namespace App\Rules;

use App\Models\Unit;
use Illuminate\Contracts\Validation\Rule;

class UniqueUnitNoInFloor implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    protected $floor_id, $project_id;

    public function __construct($floor_id, $project_id)
    {
        $this->floor_id = $floor_id;
        $this->project_id = $project_id;

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
        return !Unit::where('floor_number', $this->floor_id)
        ->where('unit_no', $value)
        ->where('unit_project_id',  $this->project_id)
        ->exists();

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This unit already exist in this floor';
    }
}
