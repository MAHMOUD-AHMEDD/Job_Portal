<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPostingSkills extends Model
{
    use HasFactory;
    protected $fillable=['job_posting_id','skill_id'];
}
