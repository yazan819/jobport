<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSaved extends Model
{
    use HasFactory;

    protected $table = 'jobsaveds';

    protected $fillable = [
        'id',
        'job_id',
        'user_id',
        'job_image',
        'job_title',
        'job_region',
        'company',
        'job_type',
        'created_at',
        'update_at',
    ];
    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
