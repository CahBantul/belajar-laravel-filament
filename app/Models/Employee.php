<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'department_id', 'country_id', 'state_id', 'city_id', 'address', 'zip_code', 'date_hired', 'date_of_birth'];

    public function department() : BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
