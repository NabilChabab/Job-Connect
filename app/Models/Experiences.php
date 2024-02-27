<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    use HasFactory;



    protected $fillable = [
        'position',
        'description',
        'company',
        'start_date',
        'end_date'
    ];



    public function profile()
    {
        return $this->hasOne(Profiles::class, 'experience_id')->withDefault(); // Eager load profile with default
    }
}
