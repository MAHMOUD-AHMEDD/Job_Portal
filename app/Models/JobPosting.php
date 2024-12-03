<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
use HasFactory;

protected $fillable = ['employer_id', 'job_detail_id'];

public function employer()
{
return $this->belongsTo(User::class, 'employer_id');
}

public function jobDetail()
{
return $this->belongsTo(JobDetails::class, 'job_detail_id');
}

public function skills()
{
return $this->belongsToMany(Skills::class, 'job_posting_skills','job_posting_id','skill_id',);
}

public function applications()
{
return $this->hasMany(Applications::class);
}

public function savedByUsers()
{
return $this->belongsToMany(User::class, 'saved_jobs', 'job_posting_id', 'job_seeker_id');
}
}
