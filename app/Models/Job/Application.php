<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = 'applications';


    protected $fillable = [
        'job_id',
        'user_id',
        'cv',
        'job_title',
        'job_image',
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
    public $timestamps = true;

}
