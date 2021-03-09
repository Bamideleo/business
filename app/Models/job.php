<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;

    protected $table ='jobs';
    protected $primarykey = 'id';

    // the fillable

    protected $fillable = [
        'title',
        'company',
        'company_logo',
        'location',
        'salary',
        'category',
        'description',
        'benefit',
        'job_type',
        'conditions'
    ];

// the relatonship between the user and the job
    public function user()
    {
        return $this->belongsTo(User::class);
    }

// Relationship between the categories & job
    public function categories()
    {
       return $this->belongsTo(categories::class);
    }

    // Relationship between the job_type & job
    public function job_type()
    {
       return $this->belongsTo(job_type::class);
    }

     // Relationship between the job_type & job
     public function condition()
     {
        return $this->belongsTo(work_conditions::class);
     }

      // Relationship between the job_type & job
      public function guest()
      {
         return $this->belongsTo(guest_info::class);
      }
}
