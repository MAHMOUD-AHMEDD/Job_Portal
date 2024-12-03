<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function jobPostings()
    {
        return $this->belongsToMany(JobPosting::class, 'job_posting_skills','skill_id','job_posting_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_skills', 'skill_id','user_id');
    }
}
