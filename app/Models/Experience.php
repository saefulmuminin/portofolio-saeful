<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'company',
        'description',
        'start_date',
        'end_date',
    ];

    protected $dates = ['start_date', 'end_date'];

    // Accessor to format date
    public function getStartDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format('Y-m-d') : null;
    }

    // Accessor to format date
    public function getEndDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format('Y-m-d') : null;
    }

    // Mutator to ensure start_date is stored as Carbon instance
    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = $value ? Carbon::parse($value) : null;
    }

    // Mutator to ensure end_date is stored as Carbon instance
    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = $value ? Carbon::parse($value) : null;
    }
}
