<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guest_info extends Model
{
    use HasFactory;

    protected $table ='guest_infos';
    protected $primarykey = 'id';

// the fillable 

   protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'location',
        'cv',
        'job_id' 
    ];


    // Relationship between the job_type & job
    public function job()
    {
        return $this->hasOne(job::class);
    }
}

