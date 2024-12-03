<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    use HasFactory;

    protected $fillable = ['job_posting_id', 'job_seeker_id', 'resume', 'status', 'applied_at'];

    public function jobPosting()
    {
        return $this->belongsTo(JobPosting::class);
    }

    public function jobSeeker()
    {
        return $this->belongsTo(User::class, 'job_seeker_id');
    }
}
