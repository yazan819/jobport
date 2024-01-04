<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'id',
        'name',
        'created_at',
        'update_at',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
    
    public $timestamps = true;

}
