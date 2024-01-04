<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';

    protected $fillable = [
        'id',
        'job_title',
        'job_region',
        'company',
        'job_type',
        'vacancy',
        'experience',
        'salary',
        'gender',
        'application_deadline',
        'jobdescription',
        'responsibilities',
        'education_experience',
        'otherbenifits',
        'image',
        'created_at',
        'update_at',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function jobSaveds()
    {
        return $this->hasMany(JobSaved::class, 'job_id');
    }
    public function applications()
    {
        return $this->hasMany(Application::class, 'job_id');
    }

    public $timestamps = true;
}
