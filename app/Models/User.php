<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];



    public function skills()
    {
        return $this->belongsToMany(Skills::class, 'user_skills','user_id','skill_id');
    }

    public function jobPostings()
    {
        return $this->hasMany(JobPosting::class, 'employer_id');
    }

    public function savedJobs()
    {
        return $this->belongsToMany(JobPosting::class, 'saved_jobs', 'job_seeker_id', 'job_posting_id');
    }

    public function applications()
    {
        return $this->hasMany(Applications::class, 'job_seeker_id');
    }

//    public function notifications()
//    {
//        return $this->hasMany(Notifications::class);
//    }

}
