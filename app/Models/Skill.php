<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    public function jobOffre()
    {
        return $this->hasMany(JobOffre::class);
    }

    public function profile()
    {
        return $this->belongsToMany(Profiles::class , 'profile_skill', 'skill_id', 'profile_id');
    }

    protected $fillable = [
        'name',
    ];
}
