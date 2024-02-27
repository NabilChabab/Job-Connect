<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;


    protected $fillable =[
        'headline',
        'location',
        'education_id',
        'experience_id',
        'user_id',
        'industry_id',
    ];


    public function education()
    {
        return $this->belongsTo(Educations::class);
    }
    public function experience()
    {
        return $this->belongsTo(Experiences::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skills::class);
    }
}
