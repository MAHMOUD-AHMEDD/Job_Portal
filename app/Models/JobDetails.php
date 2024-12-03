<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'career_level', 'education_level', 'salary', 'category_id',
        'job_overview', 'key_responsibilities', 'job_requirements',
        'preferred_qualifications', 'salary_range', 'status',
        'location', 'title', 'employment_type', 'experience'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
