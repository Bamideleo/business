<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class work_conditions extends Model
{
    use HasFactory;

    protected $table ='work_conditions';
    protected $primarykey = 'id';

    // the fillable

    protected $fillable = ['conditon'];


     // Relationship between the job_type & job
     public function job()
     {
        return $this->hasOne(job::class);
     }
}
