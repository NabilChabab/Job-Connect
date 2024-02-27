<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educations extends Model
{
    use HasFactory;


    protected $fillable = [
        'degree',
        'university',
        'description',
        'start_date',
        'end_date'
    ];


    public function profile()
    {
        return $this->hasOne(Profiles::class, 'education_id')->withDefault(); // Eager load profile with default
    }
}
