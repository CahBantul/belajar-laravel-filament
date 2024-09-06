<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'department_id', 'country_id', 'state_id', 'city_id', 'address', 'zip_code', 'date_hired', 'date_of_birth'];
}
