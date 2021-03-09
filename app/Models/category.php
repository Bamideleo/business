<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;


    protected $table ='categories';
    protected $primarykey = 'id';

    // the fillable
    protected $fillable =['category'];
    

    // Relationship between the categories & job
    public function job()
    {
       return $this->hasOne(job::class);
    }
}
