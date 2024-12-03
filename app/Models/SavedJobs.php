<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedJobs extends Model
{
    use HasFactory;

    protected $fillable = ['job_seeker_id', 'job_posting_id'];

    public function jobSeeker()
    {
        return $this->belongsTo(User::class, 'job_seeker_id');
    }

    public function jobPosting()
    {
        return $this->belongsTo(JobPosting::class);
    }
}
