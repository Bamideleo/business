<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_type extends Model
{
    use HasFactory;

    protected $table ='job_types';
    protected $primarykey = 'id';

    // the fillable

    protected $fillable = ['jb_type'];


     // Relationship between the job_type & job
     public function job()
     {
        return $this->hasOne(job::class);
     }

}
