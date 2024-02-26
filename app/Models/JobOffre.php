<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOffre extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    // public function skill()
    // {
    //     return $this->hasMany(Skill::class);
    // }
    use HasFactory;
    protected $fillable = [
        'title',
        'contracte',
        'salary',
        'n_experiences',
        'content',
        'companie_id'
    ];
}
