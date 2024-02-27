<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class JobOffre extends Model implements HasMedia
{
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function skill()
    {
        return $this->belongsToMany(Skill::class);
    }
    use HasFactory,InteractsWithMedia;
    protected $fillable = [
        'title',
        'contracte',
        'salary',
        'n_experiences',
        'content',
        'companie_id'
    ];
}
