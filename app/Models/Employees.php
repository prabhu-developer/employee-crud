<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'department_id',
        'designation',
        'mobile',
        'salary',
        'birth_date',
        'gender_id',
        'blood_group_id',
        'religion_id',
        'appointment_date',
        'join_date',
        'address',
        'avatar',
        'is_active'
    ];

    public function department() {
        return $this->belongsTo(Departments::class);
    }
    public function gender() {
        return $this->belongsTo(Gender::class);
    }
    public function bloodGroup() {
        return $this->belongsTo(BloodGroup::class);
    }
    public function religion() {
        return $this->belongsTo(Religion::class);
    }
}
