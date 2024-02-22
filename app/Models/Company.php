<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function representatives()
    {
        return $this->hasOne(Representative::class);
    }

    public function jobOffre()
    {
        return $this->hasMany(JobOffre::class);
    }
    public function post()
    {
        return $this->hasMany(Post::class);
    }
    protected $fillable = [
        'company_name',
        'company_email',
        'description',
        'domaine',
        'location',
        'founded_date',
    ];
    
}
